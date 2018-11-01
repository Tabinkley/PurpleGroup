<?php
/**
 * Created by PhpStorm.
 * User: tycru
 * Date: 10/28/2018
 * Time: 4:02 PM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

    <link rel = "Stylesheet" href = "myLoginPageStyleSheet.css">
</head>
<body style="background-color: #1abc9c">

    <div id = "main-wrapper">
        <center>
            <h2>User Login</h2>
            <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFInofRxYgndx6Xpd__cqlTJfKU1NkGEk5wcDYZ_wldHCADxKt"
                 class = "PHPmySQL"/>
        </center>

    <form class = "MyForm" action = "userLoginPage.php" method = "post"><br>
        <label><b></b>Username:</label>
        <input type = "text" class = "inputvalues" placeholder = "Type your username"/><br><br>
        <label><b></b>Password:</label>
        <input type = "password" class = "inputvalues" placeholder = "Type your password"/><br><br>
        <input type = "submit" id = "login_btn" value = "Login"/><br>
        <a href = "userRegistrationPage.html"><input type = "button" id = "register_btn" value = "Register"/></a>
    </form>

    </div>
</body>
</html>