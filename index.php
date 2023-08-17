<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Home</title>
</head>


<style>

  body {
     background-image: url("img/jett.jpg");
     background-attachment: fixed;
     background-size: cover;
  }

  nav {
  background-image: url("img/banner.jpg");
  background-size: 800px, 500px;
 
  
}
@import url('https://fonts.googleapis.com/css2?family=Barriecito&display=swap');
  
</style>





<body>

<div id="notiAndNav">

<div class="nav">

</div>
<center>
<nav id="navigation">

<div id="bannerText">ValoFan</div>

<br><br>

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

<br><br><br>


  <div id="noti">
  
  
  <?php



if (isset($_SESSION["username"])) {
  $name = $_SESSION["username"];
  echo "<p id='loggedIn' class='child'>Welcome, $name!</p>";

} else {
  
  echo "<p id='notLoggedIn' class='child'> You are not logged in! </p>";
  
  echo "<form action='signup.php'>
          <input type='submit' id='regButton' value='Register/Login' />
          </form>";
}

  ?>


   </div>

</div>




</center>





<center>
  <h1>Valorant</h1>
</center>
  

  



<p>VALORANT is a competitive tactical shooter from the first-person perspective. It takes place on a near-future Earth and features a cast of characters known as agents, each of which have their own unique set of abilities to create tactical opportunities.
</p>

<br><br>

<center>
  <h2>Gameplay</h2>
</center>


  <p>Ten players are divided into two teams, Attackers and Defenders, with the goal of winning the most rounds. In order to win a round, a team must eliminate the opposing team or complete their team-specific spike objective. First team who reaches 13 rounds, wins the game. The game starts in a lobby, where players have to lock in their Agent. The lobby lasts for 80 seconds or until everyone has locked in their Agent. Only one of each Agent can be selected on each team and players cannot see which Agent has been picked on the opposing team until the first Buy Phase. The Buy Phase occurs before each round and lasts for 30 seconds. During Buy Phase, most areas of the map are inaccessible and the two teams cannot meet each other. Therefore, Attackers cannot enter sites and are only limited to areas near their spawn zone, while the Defenders can move freely between sites, but not further than that. Players are also allowed to buy weapons, shields, and abilities during this phase.
 </p>
 
 <br><br>
<center>
  <h3>Agents</h3>
</center>
 

  <p>
Agents are composed of individuals with hypernatural abilities known as Radiants and radianite technology users. Each have their own Signature Ability and an Ultimate Ability used to create and allow tactical opportunities. Riot Games had stated they planned on launching VALORANT with 12 agents and aim to release a new one every act, so long as that act doesn't contain other major content releases such as new maps.
</p>

<br><br>

<center>
  <h4>Weapons</h4>
</center>



<p>
Players are able to utilize a range of different weapons, each with their own attributes to cater to specific playstyles, with corresponding strengths and weaknesses. Weapons can be bought during the Buy Phase using creds, bought for teammates or can be picked up when dropped by dead players. They are divided into the following categories:
  
Sidearms:
SMGs
Rifles
Shotguns
Machine Guns
Sniper Rifles
Melee
Abilities
Unlike Weapons, abilities persist after death and between rounds of the same half. Most agents have two Basic Abilities (although some may have one or three), charges of which is usually purchased between rounds but persist until used. They also have one Signature Ability (although some may have two) & one Ultimate Ability each. Signature Ability are generally free and/or restock every round or every 2 kills. Ultimate Ability can be utilized once 6, 7, or 8 ultimate points (depending on the agent) are obtained by kills, spike plants, ultimate orbs, etc.
</p>

<br><br>
<center>
  <h5>Technical Features</h5>
</center>



<p>
128-tick servers.
At least 30 frames per second on most computers with minimal specifications and 60 to 144 FPS on modern gaming rigs.
A global spread of datacenters aimed at 35ms for players in major cities around the world
A well developed netcode.
Anti-cheat service on launch day.
</p>


<br><br><br><br><br>



   

    
</body>
</html>