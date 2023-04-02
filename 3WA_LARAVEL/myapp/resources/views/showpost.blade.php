


@extends('template')
@section('content')
<div class="container p-5">

<h1 class="imp mb-5">Le post modifié ID : {{ $post->id }}</h1>
    <ul class="">
       
            <h3>Titre : {{ $post->title }}</h3>
            <p class="article">{{ $post->body }}</p>
            <p class="imp">Publié le : {{ $post->published_at }}</p>
            <p class="imp">Mis a jour le : {{ $post->updated_at }}</p>
            <br>
     
    </ul>
    

            
            </div>

    @endsection('content')    