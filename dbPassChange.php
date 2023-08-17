<?php

session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        header("Location: account.php?error=emptyfields");
        exit();
    } else if ($newPassword !== $confirmPassword) {
        header("Location: account.php?error=passwordcheck");
        exit();
    } else if ($newPassword == $oldPassword) {
        header("Location: account.php?error=samepassword");
        exit();
    } else {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "users";

        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (!$conn) {
            header("Location: account.php?error=db-error");
            exit();
        }

        $query = "SELECT password FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $password = $row['password'];

            if ($password == $oldPassword) {
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE users SET password='$hashedPassword' WHERE username='$username'";
                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    header("Location: account.php?success=passwordchanged");
                    exit();
                } else {
                    header("Location: account.php?error=db-error");
                    exit();
                }
            } else {
                header("Location: account.php?error=invalid-old-password");
                exit();
            }
        } else {
            header("Location: account.php?error=db-error");
            exit();
        }
    }
} else {
    header("Location: account.php");
    exit();
}
?>