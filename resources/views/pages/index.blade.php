@extends('layouts.master')
@section('content')
    <div class ="container">
        <div class="slideshow"
                   data-cycle-fx=carousel
                   data-cycle-timeout=1000
                   data-cycle-carousel-visible=3
                   data-cycle-carousel-fluid=true
                >
            <img src="http://malsup.github.io/images/beach1.jpg">
            <img src="http://malsup.github.io/images/beach2.jpg">
            <img src="http://malsup.github.io/images/beach3.jpg">
            <img src="http://malsup.github.io/images/beach4.jpg">
            <img src="http://malsup.github.io/images/beach5.jpg">
            <img src="http://malsup.github.io/images/beach9.jpg">
        </div>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-3">
                    <h3><a href="{{ url('/article', $article->slug) }}">{{ $article->title }}</a></h3>
                    <p>{{ $article->content }}</p>
                    <a href="{{ url('/article', $article->slug) }}" class="btn btn-default">Read More</a>
                </div>
            @endforeach
        </div>
        {!! $articles->render() !!}

    </div>
@stop