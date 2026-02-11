<?php 
include 'db_connect.php'; 

// Fetch data sorted numerically by year and then semester
$query = "SELECT * FROM curriculum ORDER BY year_level ASC, semester ASC";
$result = mysqli_query($conn, $query);

$courseInfo = [
    'code' => 'BSIT',
    'title' => 'Bachelor of Science in Information Technology'
];

// Variable to track the current section during the loop
$currentSection = ""; 
?>