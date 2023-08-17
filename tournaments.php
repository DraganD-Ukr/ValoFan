<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/tournaments.css">
    
    <title>Tournaments</title>

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
    <li><a id="tournamentsPage" href="tournaments.php">Tournaments</a></li>
    <?php if (isset($_SESSION['username'])) { ?>
      <li><a href="account.php"><?php echo $_SESSION['username']; ?></a></li>
      <li><a href="logout.php">Logout</a></li>
    <?php } else { ?>
      <li><a href="login.php">Login</a></li>
    <?php } ?>
  </ul>
</nav>

</center>

<section>
  <!--for demo wrap-->
  <h1>Tournaments Tiers</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>Typical prize pool</th>
          <th>Description</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

        <tr>
          <td>S-Tier</td>
          <td>$100k+</td>
          <td>Tournaments with only the world's elite teams. Finals of S-Tier tournaments are international LAN-events. They require an extensive qualifier system to make sure only the top teams can take part.</td>
        </tr>
        <tr>
          <td>A-Tier</td>
          <td>$50k+</td>
          <td>Tournaments with top competition, however a less strict qualifying system than S-Tier, for example by open qualifiers. A-Tier tournaments can, but do not have to include a LAN-step, but require substantial regional impact in a significant region. Examples for A-Tier tournaments are RAGE Japan Tournament or Pop Flash.</td>
        </tr>
        <tr>
          <td>B-Tier</td>
          <td>$5-50k</td>
          <td>Tournaments with mostly top competition and/or unusually high prize pools. Tournaments with relatively small prize pools and less overall importance can be B-Tier if competitors are expected to be majority top level in their region. B-Tier tournaments need to have at least some regional impact. Domestic tournaments can be B-Tier as well, however only if the country in question has multiple notable active players close to the top level of play. Examples are the Valorant Contenders Cup, Gamers Club Ultimate #2 or Clan Masters 2020.</td>
        </tr>
        <tr>
          <td>C-Tier</td>
          <td>$10k or less</td>
          <td>Tournaments which focus on a region’s or country's bubble scene and small prize pools, but that are not part of weekly or monthly events.</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</section>







<br><br><br><br><br><br><br>







    


<section>
  <!--for demo wrap-->
  <h1>S,A,B-Tiers Tournaments</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Tier</th>
          <th>Tournaments</th>
          <th>Date</th>
          <th>Prize</th>
          <th>Number of Players/Teams </th>
          <th>Location</th>
          <th>Winner</th>
          <th>Runner-up</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

        <tr>
          <td>A-Tier</td>
          <td>VALORANT Challengers 2023: North America Face Off</td>
          <td>Mar 22 - 31, 2023</td>
          <td>$30,000</td>
          <th>8</th>
          <td>North America</td>
          <td>M80</td>
          <td>G2</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>VALORANT Challengers 2023: Japan Split 1</td>
          <td>Jan 28 - Mar 19, 2023</td>
          <td>$38,062.12</td>
          <th>8</th>
          <td>Osaka</td>
          <td>FL</td>
          <td>CR</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>VALORANT Challengers 2023: Brazil Split 1</td>
          <td>Jan 18 - Mar 19, 2023</td>
          <td>$77,379.34</td>
          <th>8</th>
          <td>São Paulo</td>
          <td>UNION</td>
          <td>KS</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>VALORANT Challengers 2023: North America Split 1</td>
          <td>Feb 01 - Mar 17, 2023</td>
          <td>$38,062.12</td>
          <th>12</th>
          <td>North America</td>
          <td>M80</td>
          <td>TGRD</td>
        </tr>

        <tr>
          <td>S-Tier</td>
          <td>VCT 2023: LOCK//IN São Paulo</td>
          <td>Feb 13 - Mar 04, 2023</td>
          <td>$500,000	</td>
          <th>32</th>
          <td>São Paulo</td>
          <td>FNC</td>
          <td>LOUD</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td> VALORANT Challengers 2023: Korea Split 1</td>
          <td>Jan 26 - Feb 25, 2023</td>
          <td>$57,530.36	</td>
          <th>8</th>
          <td>Korea</td>
          <td>DK</td>
          <td>RIO</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>Red Bull Home Ground #3</td>
          <td>Dec 09 - 11, 2022</td>
          <td>$100,000	</td>
          <th>8</th>
          <td>United Kingdom Manchester	</td>
          <td>100T</td>
          <td>C9</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>G-Loot VALORANT Clash - Grand Finals</td>
          <td>Nov 25 - 27, 2022</td>
          <td>$50,000	</td>
          <th>16</th>
          <td>Europe</td>
          <td>NAVI</td>
          <td>PRL</td>
        </tr>

        <tr>
          <td>A-Tier</td>
          <td>Valorant India Invitational</td>
          <td>Nov 18 - 20, 2022</td>
          <td>$100,000	</td>
          <th>8</th>
          <td>Hyderabad</td>
          <td>PRX</td>
          <td>TH</td>
        </tr>

        <tr>
          <td>S-Tier</td>
          <td>VCT 2022: Game Changers Championship</td>
          <td>Nov 15 - 20, 20223</td>
          <td>$500,000	</td>
          <th>8</th>
          <td>Berlin</td>
          <td>G2.G</td>
          <td>SR GC</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: South Asia Split 1</td>
          <td>Mar 18 - Apr 23, 2023</td>
          <td>$40,000</td>
          <th>10</th>
          <td>New Delhi</td>
          <td>OG</td>
          <td>GODS</td>
        </tr>
        
        <tr>
          <td>B-Tier</td>
          <td>FGC Valorant Invitational 2023: Act 1</td>
          <td>Mar 22 - Apr 16, 2023</td>
          <td>$45,000</td>
          <th>10</th>
          <td>China</td>
          <td>ASE</td>
          <td>EDG</td>
        </tr>
        

        <tr>
          <td>B-Tier</td>
          <td>VCT 2023: Game Changers North America Series S1</td>
          <td>Apr 11 - 14, 2023</td>
          <td>$50,000</td>
          <th>8</th>
          <td>North America</td>
          <td>V1</td>
          <td>SR GC</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>Insomnia 70 iSeries Challenge</td>
          <td>Apr 07 - 10, 2023</td>
          <td>$12,500.38</td>
          <th>12</th>
          <td>Skål</td>
          <td>OG</td>
          <td>TGH</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: Japan Split 2 Advance Stage</td>
          <td>Mar 28 - 31, 2023</td>
          <td>$25,000</td>
          <th>12</th>
          <td>Japan</td>
          <td>TBD</td>
          <td>TBD</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: LAN Split 1</td>
          <td>Mar 01 - 31, 2023</td>
          <td>$38,000	</td>
          <th>6</th>
          <td>Latin America North</td>
          <td>6K</td>
          <td>FS</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: LAS Split 1</td>
          <td>Feb 28 - Mar 30, 2023</td>
          <td>$38,000</td>
          <th>6</th>
          <td>Latin America South</td>
          <td>9z</td>
          <td>INF</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VCT 2023: Game Changers Brazil Series 1</td>
          <td>Mar 21 - 28, 2023</td>
          <td>$19,464.63	</td>
          <th>8</th>
          <td>São Paulo</td>
          <td>TL BR</td>
          <td>LOUD Fem</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>Complexity Paradox Invitational</td>
          <td>Mar 25 - 26, 2023</td>
          <td>$10,000</td>
          <th>8</th>
          <td>North America</td>
          <td>EG GC</td>
          <td>GX3</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VCT 2023: Game Changers APAC Open 1</td>
          <td>Mar 15 - 19, 2023</td>
          <td>$10,000</td>
          <th>8</th>
          <td>Asia-Pacific</td>
          <td>SMG</td>
          <td>OGX</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: Vietnam Split 1</td>
          <td>Feb 07 - Mar 12, 2023</td>
          <td>$26,310.43</td>
          <th>8</th>
          <td>Vietnam</td>
          <td>FU</td>
          <td>BAAM</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: Malaysia & Singapore Split 1</td>
          <td>Feb 02 - Mar 12, 2023</td>
          <td>$22,312.18</td>
          <th>8</th>
          <td>Malaysia, Singapore</td>
          <td>BLD</td>
          <td>X10</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023 MENA: Resilience Split 1 - Levant and North Africa</td>
          <td>Jan 30 - Mar 12, 2023</td>
          <td>$17,500</td>
          <th>8</th>
          <td>Middle East, Africa</td>
          <td>RAAD</td>
          <td>GKE</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: Philippines Split 1</td>
          <td>Jan 27 - Mar 12, 2023	</td>
          <td>$27,273.95	</td>
          <th>8</th>
          <td>Philippines</td>
          <td>NAOS</td>
          <td>OAS</td>
        </tr>

        <tr>
          <td>B-Tier</td>
          <td>VALORANT Challengers 2023: Oceania Split 1</td>
          <td>Jan 21 - Mar 12, 2023	</td>
          <td>$33,089.95	</td>
          <th>8</th>
          <td>Oceania Oceania	</td>
          <td>95X</td>
          <td>BOBO</td>
        </tr>
        
        
      </tbody>
    </table>
  </div>
</section>
    
</body>
</html>