<?php 
function register($useremail, $password, $firstname, $lastname, $country){

    $pdo = Database::getInstance()->getConnection();

    $check_exist_query = 'SELECT COUNT(*) FROM `tbl_users` WHERE user_email = :useremail';
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':useremail'=>$useremail
        )
    );

    if($user_set->fetchColumn()>0){
        
        return 'Email already in use';

    } else {
        $newuser = "INSERT INTO `tbl_users`(user_fname, user_lname, user_password, user_email, user_country) VALUES(:firstname, :lastname, :pass, :useremail, :country)";
            $user_build = $pdo->prepare($newuser);
            $user_build->execute(
                array (
                    ':firstname'=>$firstname,
                    ':lastname'=>$lastname,
                    ':pass'=>$password,
                    ':useremail'=>$useremail,
                    ':country'=>$country,
                )
            );
        
            $to = $useremail;
            $subject = "Ontario Summer";
            $content = "Thanks for signing up!";
            $headers = "From: Ontario-summer@on.ca";

            mail($to,$subject,$content,$headers);
    
        } 

}

// 'INSERT INTO tbl_users(user_fname, user_lname, user_password, user_email, user_country) VALUES($firstname, $lastname, $password, $useremail, $country)';