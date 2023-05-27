
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRH</title>

    <link href="style.css" rel="stylesheet">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>



    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



     <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

       

    <script>
    // Wait for the document to be ready
    $(document).ready(function () {
        // Hide the flash message after 5 seconds
        setTimeout(function () {
            $('#flash-message').fadeOut('slow');
        }, 5000); // 5000 milliseconds = 5 seconds
    });
</script>




</head>

<body>
    <header class="py-4 ">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-warning">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold" href="#">
                    <span class="bg-primary bg-gradient p-1 rounded-3 text-light">My</span> RH
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link" href="">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Espace candidature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }} ">Se connecter</a>
                        </li>
                     
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="font-sans  antialiased">
         <div class="min-h-screen flex flex-col pt-6 sm:pt-0 bg-gray-100">
               @yield('content')
         </div>
    </main>

    <footer class="border-top">
        <div class="container py-5">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-4">
                    <a class="navbar-brand text-dark text-uppercase fw-bold" href="#">
                        <span class="bg-primary bg-gradient p-1 rounded-3 text-light">MY</span> RH
                    </a>
                </div>
                <div class="col-12 col-md-4 text-md-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal"
                               data-bs-target="#mentionsLegales">Mentions légales</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-md-end">
                    
                </div>
            </div>
        </div>

        <!-- Modal -->
        

       
    </footer>
    
</body>

</html>