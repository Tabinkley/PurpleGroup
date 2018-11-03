<?php

require "header.php";

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
            <img src = "img/images.jpg" class = "PHPmySQL"/>
        </center>

    <form class = "MyForm" action = "includes/login.inc.php" method = "post"><br>
        <label><b></b>Username:</label>
        <input type = "text" class = "inputvalues" name="uid" placeholder = "Type your username"/><br><br>
        <label><b></b>Password:</label>
        <input type = "password" class = "inputvalues" name="uid" placeholder = "Type your password"/><br><br>
        <input type = "submit" id = "login_btn" value = "Login"/><br>
    </form>
    <form class ="MyForm" action = "registrationpage.php" method = "post">
      <input type = "submit" id = "login_btn" value = "Register" >

    </div>
</body>
</html>
