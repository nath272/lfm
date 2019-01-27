<?php 
if (isset($_POST['pseudo']))
{
	setcookie('pseudo',$_POST['pseudo'],time() + 365*24*3600, null, null, false, true) ;
}

?>
<!doctype html>
<html>
<head>
	<title>Enregistrement de l'association</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div>
			<div class="logoLaficom"></div>
			<div class="blocktitle">
				<p class="title">Sport-Assoc</p>
				<p class="subtitle">Gérer votre association sportive</p>
			</div>
			
		</div>
		
	</header>
	<section class="saisie">
		<form method="POST" action="form_post.php">
			<label id="name" for="name">Nom de l'association : </label><input type="text" name="name" size="30"><br />
			<label for="email" id="email">E-mail : </label><input size="30" name="email"><br />
			<input type="checkbox" name="opt1" value="opt1">option 1<br />
			<input type="checkbox" name="opt2" value="opt2">option 2<br />
			<input type="checkbox" name="opt3" value="opt3">option 3<br />
			<input type="submit" name="Envoyer" value="Envoyer" class="bouton">
		</form>
	</section>
</body>
</html>