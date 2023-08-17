<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/sources.css">
    <title>Sources</title>
</head>


<style>

  body {
     background-image: url("img/jett.jpg");
     background-attachment: fixed;
     background-size: cover;
  }

  
</style>





<body>

<center>
<nav>
  <ul>
    <li><a id="homePage" href="index.php">Home</a></li>
    <li><a href="maps.php">Maps</a></li>
    <li><a id="sourcesPage" href="sources.php">Sources</a></li>
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

<p>The sources which helped creating this project:</p>
<p>https://liquipedia.net/valorant/Portal:Tournaments</p>
<p>https://freefrontend.com/</p>
<p>https://images7.alphacoders.com/</p>
<p>https://playvalorant.com/</p>


<br><br><br><br><br><br><br><br><br>

<p>Dmytro Drahan, 2023, DkIT</p>

  

  




   

    
</body>
</html>