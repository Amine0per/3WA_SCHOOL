<x-app-layout>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-light dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark-900 dark:text-dark-100">
                    <div>
                    <h1 class="fs-1 text-decoration-underline">Modifier la tache :</h1>
                <br>
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  
                    <br>
                    <div class="form-group">
                    <label for="body" class="fs-4 py-2">Contenu :</label>
                        <textarea name="body" id="body" rows="5" class="form-control"> {{ $task->The_Task }} </textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary bg-primary">Modifier</button>
                </form>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>