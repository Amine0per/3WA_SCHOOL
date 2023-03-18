<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des produits</h1>

    

    <ul>
        @foreach ($products as $j)
            <li>
                <h2>{{ $j['nom'] }}</h2>
                <p>{{ $j['description'] }}</p>
                <p>Prix : {{ $j['prix'] }} Dh</p>
                <p>Categorie : {{ $j['category'] }} </p>
            </li>
        @endforeach
    </ul>

    <br><br>
    
    <form method="GET" action="">
    <div class="form-group">
        <label for="category">Filtrer par catégorie :</label>
        <select class="form-control" name="cate" id="category">
            <option value="">Toutes les catégories</option>
            <option value="1">Catégorie 1</option>
            <option value="2">Catégorie 2</option>
            <option value="3">Catégorie 3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Filtrer</button>
    </form>


</body>
</html>