<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    



    <style>
      body {
     background-image: url("img/jett.jpg");
     background-attachment: fixed;
     background-size: cover;
  }
  
  #signupForm{
    background-image: url("img/dark-geometric-background-with-copy-space.jpg");
    background-size: cover;
  }
    </style>
    <script type="text/javascript" src="javascript/signup.js"></script>
</head>
<body onload = "hide()">

<center>

<nav>
  <ul>
    <li><a id="homePage" href="index.php">Home</a></li>
    <li><a href="maps.php">Maps</a></li>
    <li><a href="sources.php">Sources</a></li>
    <li><a href="tournaments.php">Tournaments</a></li>
    <?php if (isset($_SESSION['username'])) { ?>
      <li><a href="account.php"><?php echo $_SESSION['username']; ?></a></li>
      <li><a href="logout.php">Logout</a></li>
    <?php } else { ?>
      <li><a href="login.php">Login</a></li>
    <?php } ?>
  </ul>
</nav>

</center>




<div>
  <?php
// Check for error parameter in URL
$message = '';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    
    // Display the appropriate error message
    switch ($error) {
        case 'empty_fields':
            $message = 'Please fill in all fields.';
            break;        
        case 'username_and_email_taken':
            $message = ' That username and email are already taken.';
            break;
        case 'email_taken':
            $message = 'That email address is already taken.';
            break;
        case 'username_taken':
            $message = ' That username is already taken.';
            break;

        case 'signup_failed':
            $message = 'There was an error signing up. Please try again.';
            break;
        default:
            $message = '';
    }

echo '<p id="error">' . $message . '</p>';
} else {
    $message = '';
}



 

?>
</div>






<center>
  <div id="signupForm" >
  <form method="POST" action="dbSignup.php">
    
    <label>Username:</label>
    <input type="text" name="username" ><br><br>

    <label>Email:</label>
    <input type="email" name="email" ><br><br>

    <label>Password:</label>
    <input type="password" id="pass" onchange="passCheck(document.getElementById('pass').value)"; onchange="confirmPass()" name="password"><br>
    
    <a id="length" >- Password must be more than 5 charachters long</a><br>
    <a id="bigAndSmall" >- Password must have one capital and one small letter</a><br>
    
    <label>Confirm Password:</label>
    <input type="password" name="password" id="passConfirmation" onchange="confirmPass()" ><br><br>

    <a id="confPassNotification">Make sure your passwords match</a><br>





    
    <input type="submit" id="submitButton" value="Signup">

  </form>
    
</div>
</center>
<br><br><br>

<a id="account">Already a member?</a> <br>
<button id="login" onclick="window.location.href = 'login.php'" >Login</button>

<br><br>

</body>
</html>