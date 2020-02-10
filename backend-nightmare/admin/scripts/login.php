<?php 
function login($useremail, $password, $l_update){
    //return sprintf('You are trying username=>%s, password=>%s', $username, $password);

    $pdo = Database::getInstance()->getConnection();

    //Check existance

    //TODO: finish the following query to count how many users
    // with the username = $username
    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_email = :useremail';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':useremail'=>$useremail
        )
    );

    if($user_set->fetchColumn()>0){
        //Check if match
        $check_exist_query = 'SELECT * FROM `tbl_users` WHERE user_email = :useremail';
        $check_exist_query .=' AND user_password=:password';
        $user_match = $pdo->prepare($check_exist_query);
        $user_match->execute(
            array(
                ':useremail'=>$useremail,
                ':password'=>$password
            )
        );

        while($founduser = $user_match->fetch(PDO::FETCH_ASSOC)){
            $id = $founduser['user_id'];

            // TODO:: update the user table and set the user_ip colum to be $ip
            // Hint: 1. write the proper SQL query to do update
            //       2. Refer the syntax above how to execute query properly

            $update = 'UPDATE tbl_users SET latest_update =:l_update WHERE user_id = :id';
            $user_update = $pdo->prepare($update);
            $user_update->execute(
                array(
                    ':l_update'=>$l_update,
                    ':id'=>$id
                )
            );
        }

        if(isset($id)){
            redirect_to('welcome.php');
        }else{
            return 'Wrong pass';
        }
    }else{
        return 'Email not found, check for typos or Register for new user';
    }

}