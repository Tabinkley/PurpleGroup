<?php
$dBServername = "purpleweb.mysql.database.azure.com";
$dBUsername = "purpleadmin@purpleweb";
$dBPassword = "password1!";
$dBName = "purpledatabase";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
