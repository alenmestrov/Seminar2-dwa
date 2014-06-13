<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php 
$mysqli = new mysqli("localhost", "root", "root", "dwafinal");
if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
$query= "SELECT * from mjesta WHERE ime='" . $_GET['mjesto'] . "';";

$result=  $mysqli->query($query);
$row= $result->fetch_assoc();
echo '<h1>' . $row['ime'] . '</h1></br></br>';
echo '<p>' . $row['opis'] . '</p></br></br>';

echo '

<div class="col-md-3">
<form method="GET" action="index.php"  >
<input type="submit" value="Restorani"  />
<input type="hidden" name="nav" value="mjesta" />
<input type="hidden" name="mjesto" value="'. $_GET['mjesto'] . '" />
<input type="hidden" name="query" value="restorani" />
</form>
</div>
<div class="col-md-3">
<form method="GET" action="index.php">
<input type="submit" value="Koncerti" />
<input type="hidden" name="nav" value="mjesta" />
<input type="hidden" name="mjesto" value="'. $_GET['mjesto'] . '" />
<input type="hidden" name="query" value="koncerti" />
</form>
</div>
<div class="col-md-3">
<form method="GET" action="index.php">
<input type="submit" value="Hoteli" />
<input type="hidden" name="nav" value="mjesta" />
<input type="hidden" name="mjesto" value="'. $_GET['mjesto'] . '" />
<input type="hidden" name="query" value="hoteli" />
</form>
</div>
<div class="col-md-3">
<form method="GET" action="index.php">
<input type="submit" value="Letovi" />
<input type="hidden" name="nav" value="mjesta" />
<input type="hidden" name="mjesto" value="'. $_GET['mjesto'] . '" />
<input type="hidden" name="query" value="letovi" />
</form>
</div>
';

?>