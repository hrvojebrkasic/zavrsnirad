@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header">
                                <h3>
                                    <a href="{{ url('/article', $article->slug) }}">{{ $article->title }}</a>
                                    <small>{{$article->created_at}}</small>
                                </h3>
                            </div>
                            {{--@foreach($article->id as $id)--}}
                                {{--<img class="img" src="img/nature.jpg" width="100%">--}}
                            {{ Html::image('public/img/', $article->media->first()->fileName) }}

                            {{--@endforeach--}}
{{--                            {{ HTML::image('/img/'.$item->images->first()->file_name, imageAlt($item->images->first()->file_name), ['class' => 'thumbnail img-responsive lazy']) }}--}}
                            <article>{{ $article->content }}</article>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                <div class="list-group-item">
                    @foreach($articles as $article)
                    <a href="{{ url('/article', $article->slug) }}">
                        <h4 class="list-group-item-heading">{{ $article->title }}</h4></a>
                        <article class="list-group-item-heading">
                            {{ $article->content }}
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {!! $articles->render() !!}

@stop