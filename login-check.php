<?php 
	mysql_connect("localhost", "root", "root")or die("cannot connect"); 
	mysql_select_db("dwafinal")or die("cannot select DB");

	if ($mysqli->connect_errno) {
		echo $mysqli->connect_error;
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM korisnici WHERE username = '". $username . "' AND password = '" . md5($password) ."';";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result) > 0) {
		$row = mysql_fetch_assoc($result);
	
		session_start();
		
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $row['username'];
		if ($row['level'] > 1) {
			$_SESSION['admin'] = true;
		}

		header("Location:index.php?nav=Mjesta&login=true");
	}
	else
		header("Location:login.php?login=failed");
?>