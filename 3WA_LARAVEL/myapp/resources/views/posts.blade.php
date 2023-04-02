
@extends('template')
@section('content')
    <div class="container p-5">
        <h1 class="imp mb-5">Liste des posts</h1>
        
    
        @foreach ($posts as $post)

            <ul class="post-list">
            <h3 >Titre : {{ $post->title }}</h3>
            <p class="article">{{ $post->body }}</p>
            <p class="imp">Publié le : {{ $post->published_at }}</p>
            
            <div class="input-group ">
                <form action="{{ route('posts.edit', $post->id) }}" method="get">
                    @csrf
                    <button class="btn btn-info" type="submit">Edit Post</button>
                </form>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" style="margin-left: 10px;" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce post ?')">Delete Post</button>
                </form>
            </div>

            <br><br>

            </ul>
        @endforeach
           
    </div>
    @endsection('content')

