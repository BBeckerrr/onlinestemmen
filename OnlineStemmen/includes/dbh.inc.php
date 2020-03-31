<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "OnlineStemmen";


// connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
// error handeler voor geen connectie
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
