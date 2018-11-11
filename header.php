<?php
/*
Purple Group Project v1.1
View Blog Moudule v1.0

Programers:
Tabitha Binkley
Tyson Cruz
Mathew McSpadden

last updated 11/9/2018

This module is a system for registering users and allowing them to login. It also allows users to enter blogs into a database and veiw them.
*/
/* This is a bar that sits at the top of the users screen and contains tabs that are currently hashed. It has
a home button to the index.php. It also has a link to the login and register page in ther is no user logged in.
and changes to a logout button linking to the logout.inc.php.
*/
  session_start();

  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="img/images.jpg" alt="mysql logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="blogViewPage.php">Blog</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header-login">

        <?php
// This code allow for buttons based on whether a user is not logged in, logged in as a user or logged in as an admin.
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id']) AND ($_SESSION['role'] == 1)) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>
          <form action="admin.php" method="post">
            <button type="submit" name="admin-submit">Admin</button>
          </form>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>

      </div>
    </header>
