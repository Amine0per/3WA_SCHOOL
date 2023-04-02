

@extends('template')
@section('content')
<div class="container p-5">

                <h2>Modifier le post</h2>
                <br>
                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    
                      @method('PUT')
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="body">Contenu</label>
                        <textarea name="body" id="body" rows="5" class="form-control">{{ $post->body }}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
                </div>
    @endsection('content')    
            


