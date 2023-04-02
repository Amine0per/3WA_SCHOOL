<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    .imp {
  font-weight: bold;
  text-decoration: underline;
}

 .article {
  border: 2px solid black;
  padding: 20px;
}
.post-list {
    border-bottom: 1px solid black;
}


</style>
<body>
<header class="">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold text-light" href="#">
                    <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Posts</span> Today
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                        <form  action="{{ route('posts.index')}}" method="get">
                            @csrf
                            <button class="nav-link btn  border-0 fw-bold  text-light" type="submit">Liste Des posts</button>
                        </form>
                            
                        </li>
                        <li class="nav-item ">
                        <form action="{{ route('posts.create')}}" method="get">
                            @csrf
                            <button class="nav-link btn  border-0 fw-bold  text-light" type="submit">Nouveau post</button>
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