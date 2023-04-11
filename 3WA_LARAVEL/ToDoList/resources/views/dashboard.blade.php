
<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark-900 dark:text-dark-100">
                    <div>
                        <h1 class="fs-1 text-decoration-underline">Créer une tache :</h1>
                        <br>
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf
       
                            <label for="body" class="fs-4 py-2">Contenu :</label>

                            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror" >{{ old('body') }}</textarea>
                            @error('body')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <br>
                            <button type="submit" class="btn btn-primary text-dark ">Créer</button>
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>



    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark-900 dark:text-dark-100">
                    <div>
                    <h1 class="fs-1 text-decoration-underline mb-4">Liste des taches :</h1>
                    <ul id="glass">
                     @foreach ($tasks as $task)

               <li class=" @if($task->Task_Status === 'completed') completed @endif "  >
               <div style="max-width: 100%; word-wrap: break-word;" class=" @if($task->Task_Status === 'completed') text-decoration-line-through @endif">
                {{ $task->The_Task }}
               </div>
               
              
               <br>
               <div class="input-group ">
                    @if($task->Task_Status !== 'completed')
                    <form action="{{ route('tasks.edit', $task->id) }}" method="get">
                        @csrf
                       
                        <button class="btn btn-info bg-info" type="submit">Edit task</button>
                        
                    </form>
                    @endif

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger bg-danger" style="margin-left: 10px;" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tache ?')">Delete task</button>
                    </form>

                    
      
    
                    <form action="{{ route('tasks.done', $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if($task->Task_Status !== 'completed')
                        <button class="btn btn-warning bg-warning" style="margin-left: 10px;" type="submit" onclick="return confirm('Êtes-vous sûr davoir termine cette tache ?')">complete task</button>
                        @endif
                    </form>
                    
                </div>
                <div class="stat" >
                    Status : {{ $task->Task_Status }}
                    </div>
                    
               </li>
               
            
            @endforeach
        </ul>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

