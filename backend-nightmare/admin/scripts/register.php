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
        $newuser = 'UPDATE tbl_users SET latest_update =:l_update WHERE user_id = :id';
            $user_build = $pdo->prepare($newuser);
            $user_build->execute()
    }

}