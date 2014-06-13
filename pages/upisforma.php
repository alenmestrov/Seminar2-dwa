<?php
	session_start();
	
	if (empty($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<section><div class="col-md-4">
					<h4>FORMA ZA UNOS NOVOG MJESTA:</h4>
<form enctype="multipart/form-data" class="forma" name="meho" action="upis.php" method="POST">
	<label for="ime"  >Ime Mjesta:</label>
	<input id="ime" type="varchar" name="ime"  /><br /><br />
	
	<textarea  id="opis" name="opis" rows="4" cols="50"  ></textarea><br />
		
	<label for="slika" >slika:</label>	

	<input  type="hidden" name="MAX_FILE_SIZE" value="1048576"  />
	<input  type="file" id="slika" name="slika"  />

	<br/>
		
	<input type="submit" value="Upisi" /><br />
</form></div>
			</section>
			<div class="col-md-4">
<h4>FORMA ZA UNOS NOVOG RESTORANA:</h4>
<form enctype="multipart/form-data" class="forma" name="meho" action="upis.php" method="POST">
	<label for="imerestorana"  >Ime Restorana:</label>
	<input id="imerestorana" type="varchar" name="imerestorana"  /><br /><br />
	
	<label for="idmjestar"  >ID mjesta:</label>
	<input id="idmjestar" type="int" name="idmjestar"  /><br /><br />
	
	<textarea  id="opisrestorana" name="opisrestorana" rows="4" cols="50"  ></textarea><br />
		
	<label for="slikarestorana" >slika:</label>	

	<input  type="hidden" name="MAX_FILE_SIZE" value="1048576"  />
	<input  type="file" id="slikarestorana" name="slikarestorana"  />

	<br/>
		
	<input type="submit" value="Upisi" /><br />
</form></div>
			</section>
			<section>
				<div class="col-md-4">
			<h4>FORMA ZA UNOS NOVOG KONCERTA:</h4>
<form enctype="multipart/form-data" class="forma" name="meho" action="upis.php" method="POST">
	<label for="imekoncerta"  >Ime Koncerta:</label>
	<input id="imekoncerta" type="varchar" name="imekoncerta"  /><br /><br />
	
	<label for="idmjestak"  >ID mjesta:</label>
	<input id="idmjestak" type="int" name="idmjestak"  /><br /><br />
	
	<textarea  id="opiskoncerta" name="opiskoncerta" rows="4" cols="50"  ></textarea><br />
		
	<label for="slikakoncerta" >slika:</label>	

	<input  type="hidden" name="MAX_FILE_SIZE" value="1048576"  />
	<input  type="file" id="slikarestorana" name="slikarestorana"  />

	<br/>
		
	<input type="submit" value="Upisi" /><br />
</form></div>
			</section>
			<section>	
			<div class="col-md-4">
	<h4>FORMA ZA UNOS NOVOG HOTELA:</h4>
<form enctype="multipart/form-data" class="forma" name="meho" action="upis.php" method="POST">
	<label for="imehotela"  >Ime Hotela:</label>
	<input id="imehotela" type="varchar" name="imehotela"  /><br /><br />
	
	<label for="idmjestah"  >ID mjesta:</label>
	<input id="idmjestah" type="int" name="idmjestah"  /><br /><br />
	
	<textarea  id="opishotela" name="opishotela" rows="4" cols="50"  ></textarea><br />
		
	<label for="slikahotela" >slika:</label>	

	<input  type="hidden" name="MAX_FILE_SIZE" value="1048576"  />
	<input  type="file" id="slikahotela" name="slikahotela"  />

	<br/>
		
	<input type="submit" value="Upisi" /><br />
</form></div>
			</section>		
<section>
	
	<h4>FORMA ZA UNOS LETA:</h4>
<form enctype="multipart/form-data" class="forma" name="meho" action="upis.php" method="POST">
	
	
	<label for="idodrediste"  >ID odredista leta:</label>
	<input id="idodrediste" type="int" name="idodrediste"  /><br /><br />
	
	<textarea  id="opisleta" name="opisleta" rows="4" cols="50"  ></textarea><br />
		
	<br/>
		
	<input type="submit" value="Upisi" /><br />
</form>
			</section>		
			
