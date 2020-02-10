<?php 
function register($useremail, $password, $fname, $lname, $country){
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
        
        return 'Email in use';
    } else {
        $newuser = 'INSERT INTO `tbl_users` (user_fname, user_lname, user_password, user_email, user_country) VALUES (:firstname, :lastname, :pass, :useremail, :country)';
            $user_build = $pdo->prepare($newuser);
            $user_build->execute(
                array(
                    ':firstname' =>$fname,
                    ':lastname'=>$lname,
                    ':pass'=>$password,
                    ':useremail'=>$useremail,
                    ':country'=>$country
                )
            );
    }

}