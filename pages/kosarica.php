<?php 
$mysqli = new mysqli("localhost", "root", "root", "dwafinal");
if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
				
	if(!empty($_GET['delete']))
	{			
		$query = "DELETE FROM kosarica WHERE id = " . $_GET['delete'];
		$mysqli->query($query);
	}
				
$query = "SELECT korisnici.username, kosarica.id, kosarica.item FROM korisnici JOIN kosarica ON korisnici.id = kosarica.idkorisnik" ;
		$result=  $mysqli->query($query);
				while($row= $result->fetch_assoc())
			echo '<p>' . $row['username'] .' odabrao je: ' . $row['item'] .'</p><a href="?nav=Kosarica&delete=' . $row['id'] . '">Obrisi</a>';
			
?>
