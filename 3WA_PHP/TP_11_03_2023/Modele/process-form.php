<?php
// Connexion à la base de données
$connexion = @mysqli_connect("localhost","root","","JOHN_DOE_BASE") or die("erreur de connexion"); 



// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   

// Insertion des données dans la table "messages"
$sql = "INSERT INTO JOHN_DOE_TABLE (nom , prenom , email , message) VALUES (' $nom', '$prenom', ' $email', ' $message')";
if (mysqli_query($connexion, $sql)) {
    echo "Votre message a été envoyé avec succès.";
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($connexion);
}
mysqli_close($connexion);

       // Redirection vers une page de confirmation
       header("Location: ../vues/confirmation.php?nom=$nom&prenom=$prenom&email=$email&message=$message");

}
?>
