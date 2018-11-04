<?php
/* This file connects to the server and the database we are using.
*/

$dBServername = "purpleweb.mysql.database.azure.com";
$dBUsername = "purpleadmin@purpleweb";
$dBPassword = "";
$dBName = "purpledatabase";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
