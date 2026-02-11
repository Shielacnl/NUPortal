<?php
$servername = "sql201.infinityfree.com"; // MySQL Hostname
$username = "if0_41127983";            // MySQL Username
$password = "VFAJSSWbWC";            // MySQL Password (from your image)
$dbname = "if0_41127983_nuportal";   // Database Name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
