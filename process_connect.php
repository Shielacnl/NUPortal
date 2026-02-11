<?php
include 'db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize inputs (Good job keeping this!)
    $name    = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email   = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // 2. Ensure table name matches InfinityFree phpMyAdmin exactly
    $sql = "INSERT INTO connections (full_name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        // --- EMAIL SECTION ---
        $to = "shielacanillo10@gmail.com"; 
        $subject = "Inquiry from " . $name;
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: portal@canillo.com";
        
        // Note: This may not work on InfinityFree Free Tier
        @mail($to, $subject, $body, $headers);

        echo "<script>
                alert('Success! Recorded in Database.');
                window.location.href='index.php';
              </script>";
    } else {
        // Helpful for debugging live database errors
        echo "Error: " . mysqli_error($conn);
    }
}
?>
