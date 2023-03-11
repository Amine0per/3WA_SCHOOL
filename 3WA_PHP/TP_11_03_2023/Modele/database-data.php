<?php
// Connexion à la base de données
$connexion = @mysqli_connect("localhost","root","","JOHN_DOE_BASE") or die("erreur de connexion"); 



// Requête SQL pour sélectionner toutes les données de la table
$sql = "SELECT * FROM JOHN_DOE_TABLE";

// Exécution de la requête
$resultat = mysqli_query($connexion, $sql);

// Vérification s'il y a des données
if (mysqli_num_rows($resultat) > 0) {
    // Récupération et affichage des données sous forme de tableau
    echo "<table><tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Message</th></tr>";
    while($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["prenom"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé";
}

// Fermeture de la connexion
mysqli_close($connexion);
?>