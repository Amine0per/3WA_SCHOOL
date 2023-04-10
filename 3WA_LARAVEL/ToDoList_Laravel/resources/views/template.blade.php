<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 80%; }
  #sortable li { margin: 0 5px 5px 5px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; max-height: 100% ;  }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  #status { margin-left: 300px; font-weight: bold; }
  .completed {
    background-color: grey;
    color: white;
}
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
  } );
  </script>
</head>

<body>
<header class="">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold text-light" href="#">
                    <span class="bg-primary bg-gradient p-1 rounded-3 text-light">tasks</span> Today
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                        <form  action="{{ route('tasks.index')}}" method="get">
                            @csrf
                            <button class="nav-link btn  border-0 fw-bold  text-light" type="submit">Liste Des Taches</button>
                        </form>                          
                        </li>      
                    </ul>
                </div>
            </div>
        </nav>
    <br><br>
<main class="bg-light">
@yield('content')
</main>


</body>
</html>