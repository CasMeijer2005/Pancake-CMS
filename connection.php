<?php

$bdhost = "localhost";
$bduser = "root";
$bdpass = "";
$bdname = "pancakecms";

if (!$con = mysqli_connect($bdhost, $bduser, $bdpass, $bdname)) {
    die("faild to connect!");
}
