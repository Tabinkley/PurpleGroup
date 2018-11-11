<?php
/*
Purple Group Project v1.3
Module v1.0

Programers:
Tabitha Binkley
Tyson Cruz
Matthew McSpadden

last updated 11/11/2018

This page allows an admin to delete a post. 
*/

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
