<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (!empty($email)){
    if (!empty($password)){

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "users";

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
        } else {
            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    $name = $row["username"];
                    session_start();
                    $_SESSION["username"] = $name; 
                    header("Location: index.php");
                } else {
                    $error = "Invalid email or password.";
                    header("Location: login.php?error=" . urlencode($error));
                }
            } else {
                $error = "Invalid email or password.";
                header("Location: login.php?error=" . urlencode($error));
            }
            $conn->close();
        }
    } else {
        $error = "Password should not be empty.";
        header("Location: login.php?error=" . urlencode($error));
    }
} else {
    $error = "Email should not be empty.";
    header("Location: login.php?error=" . urlencode($error));
}


?>