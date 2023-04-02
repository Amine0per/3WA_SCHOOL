

@extends('template')
@section('content')
<div class="container p-5">
<h1>Créer un post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>
        <label for="body">Contenu</label>
        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" >{{ old('body') }}</textarea>
        @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
   
        
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
    @endsection('content')    


