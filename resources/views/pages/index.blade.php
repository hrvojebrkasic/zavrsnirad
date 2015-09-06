@extends('layouts.master')
@section('content')
    <div class="row col-md-12">
        <div class="carousel">
            <ul class="cycle-slideshow"
                    {{--data-cycle-slides="> a"--}}
                data-cycle-fx=carousel
                data-cycle-timeout=2000
                data-cycle-carousel-visible=3
                data-cycle-carousel-fluid=true
                    >

                <img src="img/autopromet.jpg">
                <img src="img/bas-burek.jpg">
                <img src="img/crosig.jpg">
                <img src="img/sisak.jpg">
                <img src="img/hapcic.png">
                <img src="img/logo-crosig.jpg">
            </ul>
        </div>
        <div class="col-sm-12">

            @foreach($articles as $article)
                <div class="col-md-3">
                    <h3><a href="{{ url('/article', $article->slug) }}">{{ $article->title }}</a></h3>
                    <p>{{ str_limit($article->content, $limit = 400, $end = '...') }}</p>
                    <a href="{{ url('/article', $article->slug) }}" class="btn btn-default">Više</a>
                </div>
            @endforeach
        </div>
    </div>
    {!! $articles->render() !!}
@stop