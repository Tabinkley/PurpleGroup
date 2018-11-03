<?php

 require "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>

    <link rel = "Stylesheet" href = "myLoginPageStyleSheet.css">
    <link rel = "stylesheet" href = "style.css">
</head>
<body style="background-color: #1abc9c">

<div id = "main-wrapper">
    <center>
        <h2>User Registration</h2>
        <img src = img/images.jpg alt= "Mysql Logo" class = "PHPmySQL"/>
    </center>

    <?php

    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyfields") {
        echo '<p class="signuperror">Fill in all fields!</p>';
      }
      else if ($_GET["error"] == "invaliduidmail") {
        echo '<p class="signuperror">Invalid username and e-mail!</p>';
      }
      else if ($_GET["error"] == "invaliduid") {
        echo '<p class="signuperror">Invalid username!</p>';
      }
      else if ($_GET["error"] == "invalidmail") {
        echo '<p class="signuperror">Invalid e-mail!</p>';
      }
      else if ($_GET["error"] == "passwordcheck") {
        echo '<p class="signuperror">Your passwords do not match!</p>';
      }
      else if ($_GET["error"] == "usertaken") {
        echo '<p class="signuperror">Username is already taken!</p>';
      }
    }

    else if (isset($_GET["signup"])) {
      if ($_GET["signup"] == "success") {
        echo '<p class = "signupsuccess">Signup successful!</p>';
      }
    }
    ?>

    <form class = "MyForm" action = "includes/registration.inc.php" method = "post">

      <?php

      if (!empty($_GET["uid"])) {
        echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
      }
      else {
        echo '<input type="text" name="uid" placeholder="Username">';
      }


      if (!empty($_GET["mail"])) {
        echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
      }
      else {
        echo '<input type="text" name="mail" placeholder="E-mail">';
      }
      ?>

          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat password">
          <button type="submit" name="signup-submit">Signup</button>
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
