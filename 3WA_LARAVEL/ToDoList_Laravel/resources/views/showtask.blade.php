


@extends('template')
@section('content')
<div class="container p-5">

<h1 class="imp mb-5">La Tache modifié ID : {{ $task->id }}</h1>
    <ul class="">
       
           
            <p class="article">{{ $task->The_Task }}</p>
            
            <p class="imp">Mis a jour le : {{ $task->updated_at }}</p>
            <br>
     
    </ul>
    

            
            </div>

    @endsection('content')    