<?php
	session_start();
	
	if (empty($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>

<?php
	$ime = $_POST['ime'];
	$opis = $_POST['opis'];
	$slika = $_FILES['slika']['name'];
	
	$idmjestar = $_POST['idmjestar'];
	$imerestorana = $_POST['imerestorana'];
	$opisrestorana = $_POST['opisrestorana'];
	$slikarestorana = $_FILES['slikarestorana']['name'];
	
	$idmjestak = $_POST['idmjestak'];
	$imekoncerta = $_POST['imekoncerta'];
	$opiskoncerta = $_POST['opiskoncerta'];
	$slikakoncerta = $_FILES['slikakoncerta']['name'];
	
	$idmjestah = $_POST['idmjestah'];
	$imehotela = $_POST['imehotela'];
	$opishotela = $_POST['opishotela'];
	$slikahotela = $_FILES['slikahotela']['name'];
	
	$idodrediste = $_POST['idodrediste'];
	$opisleta = $_POST['opisleta'];
	
	if($_POST['ime'] != ''){
	echo '<h1 style="text-align:center">' . $ime . '</h1>';
	echo '<h4 style="text-align:center">' . $opis . '</h4>';
	echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4>';
	
	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'dwafinal') or die('Error connecting to MySQL server.');
				$query = "INSERT INTO mjesta ( ime, opis, slika) VALUES ($ime', '$opis', '$slika')";
				$result = mysqli_query($dbc, $query) or die('Error querying databese.');
				mysqli_close($dbc);
				
		$uploads_dir=getcwd() . '/images';
$tmp_name= $_FILES['slika']["tmp_name"];
$name=$_FILES['slika']['name'];
move_uploaded_file($tmp_name,"$uploads_dir/$name");
	
				}
				
				
	if($_POST['imerestorana'] != ''){
	echo '<h1 style="text-align:center">' . $imerestorana . '</h1>';
	echo '<h4 style="text-align:center">' . $opisrestorana . '</h4>';
	echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4>';
	
	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'dwafinal') or die('Error connecting to MySQL server.');
				$query = "INSERT INTO restorani (idmjesto, ime, opis) VALUES ($idmjestar, '$imerestorana', '$opisrestorana')";
				$result = mysqli_query($dbc, $query) or die('Error querying databese.');
				mysqli_close($dbc);
				
				$uploads_dir=getcwd() . '/images';
$tmp_name= $_FILES['slika']["tmp_name"];
$name=$_FILES['slika']['slikarestorana'];
move_uploaded_file($tmp_name,"$uploads_dir/$name");
	
				}
				
				
	if($_POST['imekoncerta'] != ''){
	echo '<h1 style="text-align:center">' . $imekoncerta . '</h1>';
	echo '<h4 style="text-align:center">' . $opiskoncerta . '</h4>';
	echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4>';
	
	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'dwafinal') or die('Error connecting to MySQL server.');
				$query = "INSERT INTO koncerti (idmjesto, ime, opis) VALUES ($idmjestak, '$imekoncerta', '$opiskoncerta')";
				$result = mysqli_query($dbc, $query) or die('Error querying databese.');
				mysqli_close($dbc);
				
				$uploads_dir=getcwd() . '/images';
$tmp_name= $_FILES['slika']["tmp_name"];
$name=$_FILES['slika']['slikakoncerta'];
move_uploaded_file($tmp_name,"$uploads_dir/$name");
	
				}
	
	if($_POST['imehotela'] != ''){
	echo '<h1 style="text-align:center">' . $imehotela . '</h1>';
	echo '<h4 style="text-align:center">' . $opishotela . '</h4>';
	echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4>';
	
	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'dwafinal') or die('Error connecting to MySQL server.');
				$query = "INSERT INTO hoteli (idmjesto, ime, opis) VALUES ($idmjestah, '$imehotela', '$opishotela')";
				$result = mysqli_query($dbc, $query) or die('Error querying databese.');
				mysqli_close($dbc);
				
				$uploads_dir=getcwd() . '/images';
$tmp_name= $_FILES['slika']["tmp_name"];
$name=$_FILES['slika']['slikahotela'];
move_uploaded_file($tmp_name,"$uploads_dir/$name");
	
				}
	
	if($_POST['opisleta'] != ''){
	echo '<h4 style="text-align:center">' . $opisleta . '</h4>';
	echo '<h4 style="text-align:center">Upis uspjesno obavljen.</h4>';
	echo '<h4 style="text-align:center"><a href="index.php?nav=Mjesta">Povratak na mjesta</h4>';
	
	$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'dwafinal') or die('Error connecting to MySQL server.');
				$query = "INSERT INTO letovi (idodrediste, opis) VALUES ('$idodrediste', '$opisleta')";
				$result = mysqli_query($dbc, $query) or die('Error querying databese.');
				mysqli_close($dbc);
				
			
				}
				
				
			
	


?>
