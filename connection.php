<?php // Begin PHP
// Connection naar database
$bdhost = "localhost";
$bduser = "root";
$bdpass = "";
$bdname = "pancakecms";

// Runt als de connectie niet gelukt is
if (!$con = mysqli_connect($bdhost, $bduser, $bdpass, $bdname)) {
    die("faild to connect!");
}
// Einde PHP
//      __0__/
//     / /
//    __/\
//        |
// Pixel art by Tygo