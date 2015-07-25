@extends('app')

@section('content')
    <h1>Tasks</h1>
    <hr/>
    @foreach($tasks as $task)
        <h2>
            <a href="{{ action('TaskController@show', [$task->id]) }}">
                {{ $task->itemName }}
            </a>
        </h2>

        <div class="body">{{ $task->comment }}</div>
    @endforeach
@stop