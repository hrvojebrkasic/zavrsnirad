@extends('includes.dashboard')

@section('content')

    <div class="jumbotron text-center">
        <h2>{{ $article->title }}</h2>
        <article> {{ $article->content }}</article>
    </div>

@stop
