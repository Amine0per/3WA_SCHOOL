<?php
include 'database.php';
//Insérer des étudiants
mysqli_query($cc, "insert into etudiant(nom,prenom,email) values('tetete','vvvv','wwww@gmail.com')");

?>