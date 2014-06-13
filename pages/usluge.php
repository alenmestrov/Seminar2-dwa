<?php
session_start();
				
			
$mysqli = new mysqli("localhost", "root", "root", "dwafinal");
if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}

if($_GET['unos'] == '')	{		
	if($_GET['q'] == 'letovi')
	{
	if(!empty($_GET['delete']))
	{			
		$query = "DELETE FROM kosarica WHERE id = " . $_GET['delete'];
		$mysqli->query($query);
	}
	
		$query = "SELECT  mjesta.ime AS mjestoo, " . $_GET['q'] . ".idodrediste, " . $_GET['q'] . ".opis from " . $_GET['q'] . " JOIN mjesta on mjesta.id = " . $_GET['q'] . ".idodrediste WHERE mjesta.ime != '" . $_GET['m'] . "';" ;
		$result=  $mysqli->query($query);
		while($row= $result->fetch_assoc())
					echo '<p>' . $row['mjestoo'] . ' - ' . $row['opis'] .'
						<form method="get" action="pages/usluge.php">
						<input type="submit" value="Dodaj u košaricu" />
						<input type="hidden" value="Let prema odredištu: ' . $row['mjestoo'] . ' - ' . $row['opis'] .'" name="unos" />
					</form>
					
					
			</p> ';
			

	}
	else{
	$query = "SELECT " . $_GET['q'] . ".ime, " . $_GET['q'] . ".opis from " . $_GET['q'] . " JOIN mjesta on mjesta.id = " . $_GET['q'] . ".idmjesto WHERE mjesta.ime = '" . $_GET['m'] . "';" ;

	$result=  $mysqli->query($query);
	 while($row= $result->fetch_assoc())
		echo '<h1>' . $row['ime'] . ' 
				
					<form method="get" action="pages/usluge.php">
						<input type="submit" value="Dodaj u košaricu" />
						<input type="hidden" value="' . $row['ime'] .'" name="unos" />
						
						
					</form>
		</h1>
		<img src="images/' . $row['ime'] . '.jpg" width="460" height="150" alt="">
		<p>' . $row['opis'] . '</p></br></br>';
		
	}
}
else{
	$insert = "INSERT INTO kosarica (idkorisnik, item)VALUES(1,'" . $_GET['unos'] . "');";
	$result= $mysqli->query($insert);
	if(!$result)
		echo 'Database connection error.';

		echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4>';
}
?>