<?php
// Start session
session_start();


    $name = $_POST['name'];
    $feedback = $_POST['feedback'];


    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "feedback");

    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $sql = "INSERT INTO feeds (fname,feedback) VALUES ('$name','$feedback')";

    // Execute SQL statement
    if(mysqli_query($conn, $sql)) {
       
        header("Location: homepage.html");
    } else {
        
        header("Location: feedback.php");
    }

    // Close database connection
    mysqli_close($conn);
?>
