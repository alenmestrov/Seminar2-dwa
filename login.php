<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="UTF-8">
		<title>Ulogirajte se</title>
	</head>
	<body>
		<div class="login-div">
			<form class="login-form" action="login-check.php" method="post">
				<label class="username-label">Username</label>
				</br>
				<input type="text" class="username" name="username"/>
				</br>
				<label class="password-label">Password</label>
				</br>
				<input type="password" class="password" name="password" />
				</br>
				</br>
				<input type="submit" value="Prijava" class="loginBtn" />
			</form>
			<?php 
				if($_GET['login'] == 'failed')
				echo '<label class="lf">Krivo korisničko ime ili lozinka!</label>';
			?>
		</div>
	</body>
</html>