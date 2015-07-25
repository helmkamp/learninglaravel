@extends('app')

@section('content')
    <h1>{{ $task->itemName }}</h1>
    <hr/>

    <div class="body">
        <h3>Priority: {{ $task->priority }}</h3>
        <h3>Comments:</h3> <br/>
        <p>{{ $task->comments }}</p>
    </div>

@stop