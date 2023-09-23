<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "e_gabay");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
s