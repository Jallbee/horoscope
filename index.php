<?php
	// Include the session script
	require 'includes/session.php';


	/*
	   TO-DO: Write SQL query to retrieve ALL info on the zodiac signs
	 		  Execute the SQL query using the pdo function and fetch the result
	 */
	 		  $sql = "SELECT * FROM zodiac;";
    $statement = $pdo->query($sql);
    $zodiacs = $statement->fetchAll();
?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Cosmic Horoscopes</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press Start 2P">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  		<script src="js/loader.js"></script>
  		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  		<script src="js/horoscope.js"></script>
	</head>

	<body onload="loaderAnimation()">

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="URI Cosmic Horoscopes Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Horoscopes</a></li>
			        </ul>
			    </nav>
		   	</div>

		    <div class="header-right">
		    	<ul>
		    		<li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
		    	</ul>
		    </div>
		</header>

		<div class="wrapper">
			<div class="oval"></div>
		</div>

		<div id="content" class="animate-bottom">
			<h1>Choose Your Zodiac Sign</h1>
			<hr />
			<br />

			<!-- 
				TO DO: Fill in the cards for ALL zodiac signs from the database
  			-->

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[0]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[0]['imgSrc']?>" alt="<?= $zodiacs[0]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?=$zodiacs[0]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[0]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[1]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[1]['imgSrc']?>" alt="<?= $zodiacs[1]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[1]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[1]['birthday']?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[2]['ID'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[2]['imgSrc'] ?>" alt="<?= $zodiacs[2]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[2]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[2]['birthday'] ?></p>
				</div>

			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[3]['ID'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[3]['imgSrc'] ?>" alt="<?= $zodiacs[3]['name']?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[3]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[3]['birthday']?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?=$zodiacs[4]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[4]['imgSrc']?>" alt="<?= $zodiacs[4]['name']?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[4]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[4]['birthday']?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?=$zodiacs[5]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[5]['imgSrc']?>" alt="<?= $zodiacs[5]['name']?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[5]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[5]['birthday']?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?=$zodiacs[6]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[6]['imgSrc']?>" alt="<?= $zodiacs[6]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[6]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[6]['birthday']?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[7]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[7]['imgSrc']?>" alt="<?= $zodiacs[7]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[7]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[7]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[8]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[8]['imgSrc'] ?>" alt="<?= $zodiacs[8]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[8]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[8]['birthday'] ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[9]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[9]['imgSrc']?>" alt="<?= $zodiacs[9]['name']?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[9]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[9]['birthday']?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[10]['ID']?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[10]['imgSrc'] ?>" alt="<?= $zodiacs[10]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[10]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[10]['birthday']?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiacs[11]['ID'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiacs[11]['imgSrc']?>" alt="<?= $zodiacs[11]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiacs[11]['name']?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiacs[11]['birthday'] ?></p>
				</div>
				
			</div>

		</div>

	</body>
</html>