<?php
include('connection.php');
$c_email = $_POST['eaddress'];
$c_password = $_POST['password'];



if ($c_email == null || $c_email == null ) {
    echo "<div>Some Fields are Blank...</div>";
} else {
    $sql = mysqli_query($connection, "insert into feedback (name,email,message) values ('$c_email','$c_password')");
    echo "<div>Data is inserted successfully...</div>";
}

mysqli_close($connection);
?>