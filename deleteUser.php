<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["delete"])) {
    $username = $_SESSION["username"];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "users";

    // Connect to database
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Delete user data from table
    $sql = "DELETE FROM users WHERE username='$username'";

    if (mysqli_query($conn, $sql)) {
        // Success, redirect to login page
        header("Location: login.php?success=deleted");

        $_SESSION = array();
        session_destroy();
        
        exit();
    } else {
        // Error, display message
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
