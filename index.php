<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
				// Spoji se na bazu podataka
				$mysqli = new mysqli("localhost", "root", "root", "dwafinal");
				// Ako dodje do greske, ispisi ju
				if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
		?>
		
		<div class="header">
			<a href="index.php"><img src="images/logo.png" class="logo"></img></a>
			<a href="index.php" class="site_name">Savršeno putovanje za tebe</a>
			
			<?php
				session_start();
				
				if (empty($_SESSION['loggedIn'])) {
					echo '<a href="login.php" class="login">Login</a>';
					echo '<a href="registracija.php" class="registracija">Registracija</a>';
				} else {
					echo '<a href="#" class="registracija">' . $_SESSION['username'] . '</a>';
					echo '<a href="logout.php" class="login">Logout</a>';
				}
			?>
		
		</div>
		
		<img src="images/bg.jpg" style="width:100%;"></img>
		
		<div class="sidebar">
		<ul class="ul">
			
			<?php 
				// Izvrsi upit u bazu podataka, dohvati sve opcije izbornika
				$result = $mysqli->query("SELECT ime FROM stranice;");
				// Prodji kroz sve retke rezultata
				while($row = $result->fetch_assoc())
					{
						// Izvrsava se ako je NAV parametar popunjen
						/*if($_GET['nav'] != '') 
						{
							// Ako je vrijednost NAV parametra jednak trenutnom imenu retka
							if ($_GET['nav'] == $row['ime']) 
								// postavi "active" klasu CSS-a
								echo '<a href="index.php?nav=' . $row['ime'] . '" class="item"><li class="active">' . $row['ime'] . '</li></a>'; 
							else 
							    // ako nije postavi standardnu klasu CSS-a
								echo '<a href="index.php?nav=' . $row['ime'] . '" class="item"><li class="li">' . $row['ime'] . '</li></a>';	
						}
						else // Izvrsava se ako nema NAV parametra
						{*/
							// Ispisi samo 'Mjesta' i 'Kosarica'
							echo '<a href="index.php?nav=Mjesta" class="item"><li class="li">Mjesta</li></a>';
							echo '<a href="index.php?nav=Kosarica" class="item"><li class="li">Košarica</li></a>';
							
							session_start();
							
							if (!empty($_SESSION['admin'])) {
									echo '<a href="index.php?nav=Upis" class="item"><li class="li">Unos</li></a>';
							}
							// Prekini izvodjenje petlje
							break;
						
					}
			?>
			</ul>
		</div>
		<div class="main">
			<?php
			
				if($_GET['nav'] != 'Kosarica' && $_GET['nav'] != 'Upis')
				{
				if($_GET['nav'] == '' && $_GET['q'] == '')
					include 'pages/content.php';
					
				if ($_GET['nav'] != '' && $_GET['mjesto'] == '')
					include 'pages/mjesta2.php';
					
				if($_GET['nav'] != '' && $_GET['mjesto'] != '')
					include 'pages/place.php';
					
				if($_GET['nav'] != '' && $_GET['mjesto'] != '' && $_GET['query'] != '')
					include header('location:index.php?q=' . $_GET['query'] . '&m=' . $_GET['mjesto']);
					
				if($_GET['m'] != '')
					include 'pages/usluge.php';
				
				}
				if($_GET['nav'] == 'Kosarica')
				 include 'pages/kosarica.php';
				
				if($_GET['nav'] == 'Upis')
				 include 'pages/upisforma.php';
				
			
				
			
			?>
		</div>
		
		<div class="footer">
			<label class="copy">Copyright &copy; Alen Meštrov i Zvonimir Stubičar 2014</label>
		
		</div>
	</body>
</html>