<?php 
session_start();

if (isset($_SESSION["username"])) {
  $name = $_SESSION["username"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/account.css">
    <title>Account</title>
</head>

<style>
    body {
        background-image: url("img/jett.jpg");
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body>

<div class="nav" >
    <center>
        <nav>
            <ul>
                <li><a id="homePage" href="index.php">Home</a></li>
                <li><a href="maps.php">Maps</a></li>
                <li><a href="sources.php">Sources</a></li>
                <li><a href="tournaments.php">Tournaments</a></li>
                <?php if (isset($_SESSION['username'])) { ?>
                    <li><a id="accountPage" href="account.php"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </center>
</div>

<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
$success = isset($_GET['success']) ? $_GET['success'] : '';
$message = '';

    switch ($error) {
        case 'emptyfields':
            $message = 'Please fill in all fields.';
            break;

        case 'invalid-old-password':
            $message = 'Invalid old password. Please try again.';
            break;

        case 'passwordcheck':
            $message = 'New passwords do not match. Please try again.';
            break;

        case 'samepassword':
                $message = 'Please enter a new password which is different from old';
                break;

        case 'db-error':
            $message = 'There was an error updating your password. Please try again later.';
            break;
    }

    switch ($success) {
        case 'passwordchanged':
            $message = 'Your password has been changed successfully.';
            break;
    }

    if ($error) {
        echo '<p id="errorNotification">' . $message . '</p>';
    } else {
      echo '<p id="successNotification">' . $message . '</p>';
    }
?>

<div id="passwordChange">
    <form action="dbPassChange.php" method="post">
        <label>Enter Your Old Password:</label>
        <input id="oldPass" type="password" name="old_password"><br><br>

        <label>Enter Your New Password:</label>
        <input id="newPass" type="password" name="new_password"><br><br>

        <label>Confirm Your New Password:</label>
        <input id="newPassConfirm" type="password" name="confirm_password"><br><br>

        <button id="submitButton" type="submit" name="submit">Submit</button>
    </form>
</div> 

<br><br><br><br><br>



<a id="deleteText" >Want to Delete Your Account?</a>

<form action="deleteUser.php" method="post">
        
    <button id="deleteButton" type="submit" name="delete">Delete</button>

</form>
<br><br><br><br><br><br>

</body>
</html>
