<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Goals - The only place for football</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
         <link rel="stylesheet" href="css/main.css" type="text/css" media="screen"/>
        
    </head>

    <body>
		<div class="content">
			<h1 class="title">GOALS- the football site</h1>
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="score.php">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Scores</span>
							<span class="sdt_descr">Check the current scores</span>
						</span>
					</a>
				</li>
				<li>
					<a href="team.php">
						<img src="images/3.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Teams</span>
							<span class="sdt_descr">view all teams</span>
						</span>
					</a>
					<div class="sdt_box">
							<a href="info.php?url=http://api.football-data.org/alpha/soccerseasons/354">EPL</a>
							<a href="info.php?url=http://api.football-data.org/alpha/soccerseasons/357">Seria A</a>
							<a href="info.php?url=http://api.football-data.org/alpha/soccerseasons/351">Bundesliga</a>
					</div>
				</li>
				<li>
					<a href="players.html">
						<img src="images/1.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Players</span>
							<span class="sdt_descr">All the players info</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Managers</span>
							<span class="sdt_descr">Behind the scenes</span>
						</span>
					</a>
				</li>
				<div id="score">
				<h3>League info</h3>
				<br>
				<?php
					$uri = $_GET["url"];
				    //$uri = 'http://api.football-data.org/alpha/soccerseasons';
				    $reqPrefs['http']['method'] = 'GET';
				    $reqPrefs['http']['header'] = 'X-Auth-Token: 4b5c5c09eb264979b67f9ce7afc31e04';
				    $stream_context = stream_context_create($reqPrefs);
				    $response = file_get_contents($uri, false, $stream_context);
				    $teams = json_decode($response);
				   	$uri = ($teams->_links->leagueTable->href);
				   	//var_dump ($teams->_links->leagueTable->href);
				    $response = file_get_contents($uri, false, $stream_context);
				    $teams = json_decode($response);
				    //echo $response;
				    echo "<h3>". $teams->leagueCaption."</h3><br>";				 
				  	echo "<table>";
				  	echo "<tr><th>Position</th><th>Team</th><th>Games Played</th><th>points</th><th>Goals</th><th>Goals Against</th><th>Goal difference</th></tr>";

				  	for ($i=0; $i <count($teams->standing); $i++) { 
				  		# code...
				  			echo "<tr><td>".$teams->standing[$i]->position."</td><td><a href=fullteam.php?name=".$teams->standing[$i]->_links->team->href.">".$teams->standing[$i]->teamName."</a></td><td>".$teams->standing[$i]->playedGames."</td><td>".$teams->standing[$i]->points."</td><th>".$teams->standing[$i]->goals."</td><td>".$teams->standing[$i]->goalsAgainst."</td><td>".$teams->standing[$i]->goalDifference."</td></tr>";
				  	
				  	}
				  	echo "</table>" ;
				  
				?>
				<br><br>
				</div>
					
        <div>
            <span class="reference">
                <a href="">Rahul Mahadev - 1pi12is078</a>
				<a href="">Sathvik Varanashi - 1pi12is097</a>
            </span>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/title.js"></script>
    </body>
</html>
