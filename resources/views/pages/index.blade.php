@extends('layouts.master')
@section('content')
        <div class="row col-md-12">
            <div class="cycle-slideshow"
                 data-cycle-fx=carousel
                 data-cycle-timeout=3500
                 data-cycle-carousel-visible=3
                 data-cycle-carousel-fluid=true
                    >
                <img src="img/agencija-suzi.jpg">
                <img src="img/autopromet.jpg">
                <img src="img/bas-burek.jpg">
                <img src="img/crosig.jpg">
                <img src="img/rsz_grad-sisak.jpg">
                <img src="img/hapcic-geo.jpg">
                <img src="img/logo-crosig.jpg">
            </div>
        </div>
        <div class="row col-md-12">
            @foreach($articles as $article)
                <div class="col-md-3">
                    <h3><a href="{{ url('/article', $article->slug) }}">{{ $article->title }}</a></h3>
                    <p>{{ $article->content }}</p>
                    <a href="{{ url('/article', $article->slug) }}" class="btn btn-default">Read More</a>
                </div>
            @endforeach
        </div>
        {!! $articles->render() !!}
@stop