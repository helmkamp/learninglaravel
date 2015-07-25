@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <hr/>

    <div class="body">
        <article>{{ $article->body }}</article>
    </div>

@stop