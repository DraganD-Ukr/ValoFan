<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username) && !empty($email) && !empty($password)) {
    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "users";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
    } else {
        // Check if the username or email are already taken
        $check_username = "SELECT * FROM users WHERE username = '$username'";
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        
        $result_username = $conn->query($check_username);
        $result_email = $conn->query($check_email);
        
        if ($result_username->num_rows > 0 && $result_email->num_rows > 0) {
            // Username already taken
            header("Location: signup.php?error=username_and_email_taken");
            exit();
        } elseif ($result_email->num_rows > 0) {
            // Email already taken
            header("Location: signup.php?error=email_taken");
            exit();
        } elseif ($result_username->num_rows > 0) {
            // Username already taken
            header("Location: signup.php?error=username_taken");
            exit();
        } else {
            // Username and email available, insert new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Generate a secure hash of the password
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$hashed_password')";
            
            if ($conn->query($sql)) {
                // Signup successful, log user in and redirect to index.php
                session_start();
                $_SESSION["username"] = $username; 
                header("Location: index.php");
                exit();
            } else {
                // Signup failed
                header("Location: signup.php?error=signup_failed");
                exit();
            }
        }

        $conn->close();
    }
} else {
    // Empty fields
    header("Location: signup.php?error=empty_fields");
    exit();
}
?>
