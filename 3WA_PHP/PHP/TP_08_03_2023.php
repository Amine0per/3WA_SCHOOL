<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//1
$file_name1 = "nouveau_fichier.txt";
$file_content1 = "Ceci est un nouveau fichier créé en utilisant PHP!";

$file1 = fopen($file_name1, "w");

if ($file1) {
    fwrite($file1, $file_content1);
    fclose($file1);
    echo "Le fichier $file_name1 a été créé avec succès.";
} else {
    echo "Erreur : impossible de créer le fichier.";
}

//2
$file_name2 = "fichier.txt";

$file2 = fopen($file_name2, "r");

if ($file2) {
    while (!feof($file2)) {
        echo fgets($file2) . "<br>";
    }
    fclose($file2);
} else {
    echo "Erreur : impossible d'ouvrir le fichier.";
}

//3
$file_content2 = "Ceci est une nouvelle ligne ajoutée en utilisant PHP!";

$file2 = fopen($file_name2, "a+");

if ($file2) {
    fwrite($file2, $file_content2 . "\n");
    fclose($file2);
    echo "Le fichier $file_name2 a été mis à jour avec succès.";
} else {
    echo "Erreur : impossible d'ouvrir le fichier.";
}

//4

$file_name3 = "fichier_a_supprimer.txt";

if (file_exists($file_name3)) {
    unlink($file_name3);
    echo "Le fichier $file_name3 a été supprimé avec succès.";
} else {
    echo "Le fichier $file_name3 n'existe pas.";
}


?>
</body>
</html>