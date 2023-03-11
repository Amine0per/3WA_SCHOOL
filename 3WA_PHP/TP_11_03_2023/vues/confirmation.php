<!DOCTYPE html>
<html>
<head>
	<title>Confirmation de message</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link href="style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>
<style>

body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
footer{
    margin-top: auto;
}

</style>
<body class="container py-4">

<?php include 'header.php'; ?>

<div class = "mt-5" >
	<h1 class= "text-decoration-underline">Confirmation de message :</h1>
	<p>Merci <?php echo $_GET['prenom']; ?> pour votre message. Voici un récapitulatif de ce que vous avez saisi :</p>
	<ul>
		<li>Prenom: <?php echo $_GET['prenom']; ?></li>
		<li>Nom: <?php echo $_GET['nom']; ?></li>
		<li>Adresse e-mail: <?php echo $_GET['email']; ?></li>
		<li>Message: <?php echo $_GET['message']; ?></li>
	</ul>
</div>

<?php include 'footer.php'; ?>
</body>
</html>