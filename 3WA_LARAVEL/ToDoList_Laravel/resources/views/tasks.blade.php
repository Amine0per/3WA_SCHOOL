
@extends('template')
@section('content')
    <div class="container p-5">
        <div>
    <h1>Créer une tache</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
       
        <label for="body">Contenu</label>
        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" >{{ old('body') }}</textarea>
        @error('body')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br>
   
        
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
<br><br>
        <h1 class="imp mb-5">Liste des taches</h1>
        
        <ul id="sortable">
            @foreach ($tasks as $task)

               <li class="ui-state-default @if($task->Task_Status === 'completed') completed @endif">
               <span class="ui-icon ui-icon-arrowthick-2-n-s"> </span> <div style="max-width: 100%; word-wrap: break-word;" >
                {{ $task->The_Task }}
            </div>
               
              
               <br>
                <div class="input-group mt-2">
                    @if($task->Task_Status !== 'completed')
                    <form action="{{ route('tasks.edit', $task->id) }}" method="get">
                        @csrf
                       
                        <button class="btn btn-info " type="submit">Edit task</button>
                        
                    </form>
                    @endif

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="margin-left: 10px;" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tache ?')">Delete task</button>
                    </form>

                    
      
    
                    <form action="{{ route('tasks.done', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if($task->Task_Status !== 'completed')
                        <button class="btn btn-warning" style="margin-left: 10px;" type="submit" onclick="return confirm('Êtes-vous sûr davoir termine cette tache ?')">complete task</button>
                        @endif
                    </form>
                    <div id="status" >
                    Status : {{ $task->Task_Status }}
                    </div>
                    
                </div>
               </li>
            
            @endforeach
        </ul>
           
    </div>
    @endsection('content')

