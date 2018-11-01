<?php
/**
 * Created by PhpStorm.
 * User: tycru
 * Date: 10/29/2018
 * Time: 1:01 PM
 */

 require "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>

    <link rel = "Stylesheet" href = "myLoginPageStyleSheet.css">
</head>
<body style="background-color: #1abc9c">

<div id = "main-wrapper">
    <center>
        <h2>User Registration</h2>
        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFInofRxYgndx6Xpd__cqlTJfKU1NkGEk5wcDYZ_wldHCADxKt"
             class = "PHPmySQL"/>
    </center>

    <form class = "MyForm" action = "userLoginPage.php" method = "post"><br>
        <label><b></b>Create Your Username:</label>
        <input name "username" type = "text" class = "inputvalues" placeholder = "Create username"/><br><br>
        <label><b></b>Create Your Password:</label>
        <input name "password" type = "create password" class = "inputvalues" placeholder = "Choose your password"/><br><br>
        <label><b></b>Confirm Your Password:</label>
        <input name "confPassword" type = "confirm password" class = "inputvalues" placeholder = "Confirm your password"/><br><br>
        <input name "registerButton" type = "button" id = "register_btn" value = "Register"/><br>
        <a href = "userLoginPage.html"><input type = "button" id = "return_to_login_btn" value = "<< Return to Login"/></a>
    </form>

    <?php
        if(isset($_POST['registerButton'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confPassword = $_POST['confPassword'];

            if($password == $confPassword){
                $query = "select * from userID WHERE username = '$username'";
                $query_run = mysqli_query($con, $query);
            }

        }

    ?>

</div>
</body>
</html>