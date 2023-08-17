<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/maps.css">
    <title>Maps</title>
<style>

  body {
     background-image: url("img/jett.jpg");
     background-attachment: fixed;
     background-size: cover;
  }

  
</style>

<script type="text/javascript" src="javascript/maps.js"></script>



</head>








<body>



<center>
<nav>
  <ul>
    <li><a id="homePage" href="index.php">Home</a></li>
    <li><a id="mapsPage" href="maps.php">Maps</a></li>
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


<br><br><br><br><br><br>


<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 9</div>
    <img src="img/bind2.png" style="width:100%">
    <div class="text">Bind</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 9</div>
    <img src="img/haven.jpg" style="width:100%">
    <div class="text">Haven</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 9</div>
    <img src="img/split.jpg"  style="width:100%">
    <div class="text">Split</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 9</div>
    <img src="img/ascent.png"  style="width:100%">
    <div class="text">Ascent</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 9</div>
    <img src="img/icebox.png"  style="width:100%">
    <div class="text">Icebox</div>
  </div>


  <div class="mySlides fade">
    <div class="numbertext">6 / 9</div>
    <img src="img/breeze.jpg"  style="width:100%">
    <div class="text">Breeze</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 9</div>
    <img src="img/fracture.jpg"  style="width:100%">
    <div class="text">Fracture</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">8 / 9</div>
    <img src="img/pearl.png"  style="width:100%">
    <div class="text">Pearl</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">9 / 9</div>
    <img src="img/lotus.png"  style="width:100%">
    <div class="text">Lotus</div>
  </div>

  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
</div>


  

  

  <br><br><br><br>

  
  <form id="survey">
    <center><label for="text">Choose your vafourite maps:</label></center>
  <br>

  <input type="checkbox" id="mapBind" name="bind" value="bind">
  <label for="Bind">Bind</label><br>

  <input type="checkbox" id="mapHaven" name="Haven" value="Haven">
  <label for="Haven">Haven</label><br>

  <input type="checkbox" id="mapSpplit" name="Split" value="Split">
  <label for="Split">Split</label><br>

  <input type="checkbox" id="mapAscent" name="Ascent" value="Ascent">
  <label for="Ascent">Ascent</label><br>

  <input type="checkbox" id="mapIcebox" name="Icebox" value="Icebox">
  <label for="Icebox">Icebox</label><br>

  <input type="checkbox" id="mapBreeze" name="Breeze" value="Breeze">
  <label for="Breeze">Breeze</label><br>

  <input type="checkbox" id="mapFracture" name="Fracture" value="Fracture">
  <label for="Fracture">Fracture</label><br>

  <input type="checkbox" id="mapPearl" name="Pearl" value="Pearl">
  <label for="Pearl">Pearl</label><br>

  <input type="checkbox" id="mapLotus" name="Lotus" value="Lotus">
  <label for="Lotus">Lotus</label><br>

  <center><input type="button" id="submitSurveyButton" value="Submit" onclick="return submitSurvey();"></center>
 
<br><br>
  <input type="reset" id="resetButton" value="Reset" onclick="resetText()">
  
   
</form>
<p id="thanks"></p>


   <br><br><br><br><br><br><br><br>

    
</body>
</html>