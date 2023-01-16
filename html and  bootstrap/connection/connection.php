<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="db16";

$connection = mysqli_connect($servername, $username, $password, $db_name);

if(!$connection) {
    die("not" .mysqli_connect_error());
} else {
    echo "connected";
}