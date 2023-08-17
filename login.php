<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Login</title>

    <style>

  body {
     background-image: url("img/jett.jpg");
     background-attachment: fixed;
     background-size: cover;
  }
  
  #loginForm{
    background-image: url("img/dark-geometric-background-with-copy-space.jpg");
    background-size: cover;
  }
  
</style>

</head>
<body>

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

<div id="errorNotification" >
        
        <?php
            // Check if an error message is passed in the URL
            if (isset($_GET['error'])) {
              
                $error = $_GET['error'];
                echo '<p style="color:red;">' . $error . '</p>';
            }
            
            
            if (isset($_GET['success'])){
                $success="Your account was deleted successfully!";
                echo '<p id="deleteUser" style="color:green;">' . $success . '</p>';
            }
        ?>
        
</div>


   <div id="loginForm" >
  <form action="dbLogin.php" method="post">

    <label>Email:</label>
    <input type="email" name="email"><br><br>

    <label>Password:</label>
    <input type="password" name="password"><br><br>

    <button id="submitButton" name="login_user">Login</button>
  </form>
    
</div> 
</center>
<br><br><br><br>




  <a id="account">Don't have an account?</a> <br>
<button id="signup" onclick="window.location.href = 'signup.php'" >Signup</button>





    
</body>
</html>