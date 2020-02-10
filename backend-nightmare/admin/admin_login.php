<?php
    require_once '../load.php';
    $l_update = date('Y-m-d H:i:s');

    if(isset($_POST['submit'])){
        $useremail = trim($_POST['useremail']);
        $password = trim($_POST['password']);

        if(!empty($useremail) && !empty($password)){
            // Do the login here
            $message = login($useremail, $password, $l_update);
        }else{
            $message = 'Please fill out the required fields';
        }
    }if(isset($_POST['register'])){
        redirect_to('new_user.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Login page</title>
</head>
<body>
    <?php echo !empty($message)?$message:' '; ?>
    <form action="admin_login.php" method="post">
        <label>Email:</label><br>
        <input type="text" name="useremail" value="" /><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="" /><br>

        <button name="submit">Submit</button>

        <button name="register">register</button>
    </form>
</body>
</html>