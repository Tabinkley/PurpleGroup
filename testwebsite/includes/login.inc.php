<?php

 if(isset($_POST['login-submit'])){

   require 'dbh.inc.php'

   $uid = $_POST['uid'];
   $password = $_POST['pwd'];

   if(empty($uid) || empty($password)){
     header("Location: ../index.php?=emptyfields");
     exit();
   }
   else{
     $sql = "SELECT * FROM users WHERE uidUsers=?;";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
       header("Location: ../signup.php?error=sqlerror");
       exit();
     }
     else{

       mysqli_stmt_bind_param($stmt, "ss", $uid, $password);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_result($stmt);

     }
    }

 }
 else{
   header("Location: ../index.php");
   exit();
 }
