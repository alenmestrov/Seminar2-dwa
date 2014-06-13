<?php

//Connect to the database
$dbc = new mysqli("localhost", "root","root", "dwafinal");

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$stmt = $dbc->prepare("INSERT INTO korisnici (username, password, ime, level) VALUES (?,md5(?),?,1)");

$stmt->bind_param("sss", $username, $password, $name);
$stmt->execute();

$dbc->close();

echo '<h4 style="text-align:center">Uspjesna Registracija</h4>';
echo '<h4 style="text-align:center"><a href=index.php?nav=Mjesta>Povratak na mjesta</h4></a>';
?>
