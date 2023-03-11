<?php
// Connexion à la base de données
$connexion = @mysqli_connect("localhost","root","","contact_form") or die("erreur de connexion"); 

	// Traitement du formulaire
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            if (empty($name)) 
                echo "Please enter name";
            elseif(empty($email))
                echo "Please enter email";
                    elseif (empty($message))
                        echo "Please enter a message";
		// Insertion des données dans la table "messages"
		$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
		if (mysqli_query($connexion, $sql)) {
			echo "Votre message a été envoyé avec succès.";
		} else {
			echo "Erreur: " . $sql . "<br>" . mysqli_error($connexion);
		}
		mysqli_close($connexion);
        // Redirection vers une page de confirmation
header("Location: confirmation.php?name=$name&email=$email&message=$message");
	}
?>


