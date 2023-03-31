<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Acceuil</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore at exercitationem in maxime. Assumenda ducimus nihil quos provident inventore, non quo tempora sapiente quas distinctio velit qui dolore facere explicabo ipsam molestiae maxime perspiciatis ut, optio voluptatum a quisquam voluptas. Enim, omnis molestiae? Minima eos consectetur quos, optio iure quidem.</p>
<br>
<?php
if (DB::connection()->getPdo()) {
    echo "Connexion a la base de donnees reussie !!" ;
    echo '<br>';
    echo "Nom de la base de donnee : " ; 
    echo DB::connection()->getDatabaseName(); ;
}

?>
<br>
<br>
<a href="{{ route('Contact') }}" class="btn btn-primary">Contact</a>






</body>
</html>