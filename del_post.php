<?php
  session_start();
  include_once("includes/dbh.inc.php");

  if(!isset($_SESSION['id']) AND (!$_SESSION['role'] == 1) ){
    header("Location: index.php");
    exit();
  }
  if(!isset($_GET['pid'])) {
    header("Location: blogViewPage.php");
    exit();
  }
  //This tells the database to drop the post given by the variable retrieved from the url
  else{
    $pid = $_GET['pid'];
    $sql = "DELETE FROM posts WHERE postid=$pid";
    mysqli_query($conn, $sql);
    header("Location: blogViewPage.php");

  }
