<?php 
function login($useremail, $password, $l_update){

    $pdo = Database::getInstance()->getConnection();

    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_email = :useremail';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':useremail'=>$useremail
        )
    );

    if($user_set->fetchColumn()>0){

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
            $id = $founduser['userid'];
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
            
            $to = $useremail;
            $subject = "Ontario Summer";
            $content = "We're glad to see you back!";
            $headers = "From: Ontario-summer@on.ca";

            mail($to,$subject,$content,$headers);
            
            redirect_to('../index.html');

            
        }else{
            return 'Wrong pass';
        }
    }else{
        return 'Email not found, check for typos or Register for new user';
    }

}