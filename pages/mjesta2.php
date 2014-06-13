<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php
		$mysqli = new mysqli("localhost", "root", "root", "dwafinal");
if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
				
$query= "SELECT * from mjesta";
$result=  $mysqli->query($query);

$i = 0;
while($row= $result->fetch_assoc() ){

if ($i < 2) {
	echo '<div class="col-md-6">';
}
else {
	echo '<div class="col-md-4">';
}

echo '<a href="index.php?nav=mjesta&mjesto=' . $row['ime'] . '"><h1>' . $row['ime'] . '</h1></a>';

if ($i < 2) {
	echo '<a href="index.php?nav=mjesta&mjesto=' . $row['ime'] . '"><img src="' . $row['slika'] . '" width="460" height="150" alt=""><h1></h1></a></div>';
}
else {
	echo '<a href="index.php?nav=mjesta&mjesto=' . $row['ime'] . '"><img src="' . $row['slika'] . '" width="300" height="120" alt=""><h1></h1></a></div>';
}


$i++;
}

?>