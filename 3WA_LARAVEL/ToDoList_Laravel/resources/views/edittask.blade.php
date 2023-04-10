

@extends('template')
@section('content')
<div class="container p-5">

                <h2>Modifier la tache</h2>
                <br>
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  
                    <br>
                    <div class="form-group">
                        <label for="body">Contenu</label>
                        <textarea name="body" id="body" rows="5" class="form-control">{{ $task->The_Task }}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
                </div>
@endsection('content')    
            

