<?php
// 1. DATABASE CONNECTION DETAILS FROM INFINITYFREE
$servername = "sql201.infinityfree.com"; // MySQL Hostname
$username = "if0_41127983";            // MySQL Username
$password = "VFAJSSWbWC";            // MySQL Password
$dbname = "if0_41127983_nuportal";   // MySQL Database Name
$port = 3306;                        // MySQL Port

// Disable strict error reporting to handle connection issues gracefully
mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Success (Uncomment for testing)
// echo "Connected successfully to InfinityFree!"; 
?>
