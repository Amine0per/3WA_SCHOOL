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
$nom = "ville" ;
$value = "Rabat" ;
$duree = 60*60*24*30 ; //30jours
setcookie( $nom, $value, time() + $duree);
echo "aujourdhui : " .date("Y/m/d") . "<br>" ;
echo "il est : " . date("h:i:sa"). "<br>" ;
date_default_timezone_set("europe/paris"). "<br>" ;
echo "il est : " . date("H:i:sa"). " a paris <br>" ;
$d=mktime(20,34,40,3,03,2023);
echo "la date que j'ai cree est :" .date("Y-m-d H:i:sa"). "<br>" ;
echo "<br>" ;
echo "<br>" ;
echo "<br>" ;

$datedepart = strtotime("Friday");


$datefin = strtotime("+2 weeks", $datedepart);

while ($datedepart<$datefin) {
echo date("M d", $datedepart). "<br>";
$datedepart = strtotime ("+1 week", $datefin);

}

echo "<br>";

$e = strtotime("+3 Months");

echo date("Y-m-d H:i: sa", $e). "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
$date1 = date('d/m/Y');
echo "La date courante est : " . $date1;
echo "<br>";

$date2 = date('d-m-y');
echo "La date courante est : " . $date2;
echo "<br>";

setlocale(LC_TIME, 'fr_FR.utf8','fra'); // Configuration de la langue française
$date3 = strftime('%A %d %B %Y'); // Récupération de la date avec le format spécifié
echo "La date courante est : " . $date3;
echo "<br>";

$timestamp = time();
echo "Le timestamp du jour est : " . $timestamp;
echo "<br>";

$date_str = '05-09-2019 17:41'; // Date sous forme de chaîne de caractères
$timestamp2 = strtotime($date_str); // Conversion de la chaîne de caractères en timestamp
echo "Le timestamp pour le jeudi 05 septembre 2019 à 17h41 est : " . $timestamp2;
echo "<br>";
echo "<br>";

class Etudiant {
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $notes;

    public function __construct($nom, $prenom, $dateNaissance, $notes) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->notes = $notes;
    }

    public function getEtudiant() { 
        $notesArrayTostring = implode(", ", $this->notes);
        echo "Nom de l'etudiant : " . $this->nom ; 
        echo "<br>";
        echo "Prenom de l'etudiant : " . $this->prenom ;
        echo "<br>";
        echo "Date de naissance de l'etudiant : " . $this->dateNaissance ;
        echo "<br>";
        echo "Les notes de l'etudiant : " . $notesArrayTostring ;
    }

    public function ajouterNote($note) {
        $this->notes[] = $note;
    }

    public function calculerMoyenne() {
        $total = 0;
        $count = count($this->notes);
        foreach ($this->notes as $note) {
            $total += $note;
        }
        return "La moyenne de : ".$this->nom . " est : "  . $total / $count;
    }
}
$notes = array(12, 14, 16);
$etudiant = new Etudiant("Amine" , "Oubrik " ,"17 Aout 1992" , $notes);
$etudiant -> getEtudiant();
$etudiant -> ajouterNote(18);
echo "<br>";
echo "<br>";
$etudiant -> getEtudiant();
echo "<br>";
echo "<br>";
echo $etudiant -> calculerMoyenne();
echo "<br>";
echo "<br>";
?>









&copy; 2022-<?php echo date("Y"). "<br>" ?> ;
//*if (isset($_COOKIE[$ville]))   {
   
//*}  else {

//* }


   


</body>
</html>