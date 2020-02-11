<?php
    require_once '../load.php';

    if(isset($_POST['submit'])){
        $useremail = trim($_POST['useremail']);
        $password = trim($_POST['password']);
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $country = trim($_POST['country']);

        if(!empty($useremail) && !empty($password) && !empty($firstname) && !empty($lastname) && !empty($country)){
         
            $message = register($useremail, $password, $firstname, $lastname, $country);
        }else{
            $message = 'Please fill out the required fields';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to register page</title>
</head>
<body>
    <?php echo !empty($message)?$message:' '; ?>
    <form action="new_user.php" method="post">
        <label>Email:</label><br>
        <input type="text" name="useremail" value="" /><br>

        <label>First Name:</label><br>
        <input type="text" name="firstname" value="" /><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastname" value="" /><br>

        <label>Country:</label><br>
        <input type="text" name="country" value="" /><br>

        <label>Password:</label><br>
        <input type="text" name="password" value="" /><br>

        <button name="submit">Submit</button>
    </form>
</body>
</html>