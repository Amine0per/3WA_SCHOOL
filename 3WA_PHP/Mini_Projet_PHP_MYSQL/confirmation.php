<!DOCTYPE html>
<html>
<head>
	<title>Confirmation de message</title>
</head>
<body>
	<h1>Confirmation de message</h1>
	<p>Merci <?php echo $_GET['name']; ?> pour votre message. Voici un récapitulatif de ce que vous avez saisi :</p>
	<ul>
		<li>Nom: <?php echo $_GET['name']; ?></li>
		<li>Adresse e-mail: <?php echo $_GET['email']; ?></li>
		<li>Message: <?php echo $_GET['message']; ?></li>
	</ul>
</body>
</html>