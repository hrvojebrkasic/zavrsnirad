@extends('includes.dashboard')

@section('content')

    <div class="jumbotron text-center">
        <h2>{{ $article->title }}</h2>
        <article>
            {{ $article->content }}
            @foreach($article->medias as $media)
                <img class="img" src="{{URL::asset('/img/'.$media->file_name)}}" width="25%" height="auto">
            @endforeach
        </article>

    </div>

@stop
