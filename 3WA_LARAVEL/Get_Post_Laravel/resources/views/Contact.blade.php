<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="/Submit-form" >
  @csrf
  <label for="Nom">Nom:</label>
  <input type="text" id="Nom" name="Nom" required>
  <br> <br>
  <label for="Prenom">Prénom:</label>
  <input type="text" id="Prenom" name="Prenom" required>
  <br> <br>
  <label for="Email">Email:</label>
  <input type="email" id="Email" name="Email" required>
  <br> <br>
  <label for="Motdepasse">Mot de passe:</label>
  <input type="password" id="Motdepasse" name="Motdepasse" required>
  <br> <br>
  <button type="submit">Envoyer</button>
  <button><a href="{{ route('Acceuil') }}" >Retour</a></button>
</form>


</body>
</html>