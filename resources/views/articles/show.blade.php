@extends('layouts.master')
@section('content')

    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->content }}
    </article>

@stop