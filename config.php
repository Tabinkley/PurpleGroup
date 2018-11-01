<?php
/**
 * Created by PhpStorm.
 * User: tycru
 * Date: 10/29/2018
 * Time: 12:23 PM
 */

$con = mysqli_connect("localhost", "root", "") or die ("Unable to Connect");
mysqli_select_db($con, "userLogin");

