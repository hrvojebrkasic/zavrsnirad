@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row" >
            <div class="col-sm-7">
                @foreach($articles as $article)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header">
                                <h3>
                                    <a href="{{ url('/article', $article->slug) }}">{{ $article->title }}</a>
                                    <small>{{$article->created_at}}</small>
                                </h3>
                            </div>
{{--                            <img class="img" src="{{URL::asset('/img/'.$article->medias->first()->file_name)}}" width="60%">--}}
                            <p>{{ str_limit($article->content, $limit = 300, $end = '...') }}</p>
                            <a href="{{ url('/article', $article->slug) }}" class="btn btn-default">Više</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-sm-5">
                <ul class="list-group-item">
                    <li><a href="http://www.auto-promet-sisak.hr/" target="_blank"><img class="bckgimg2" src="img/autopromet.jpg"></a></li>
                    <li><a href="http://www.cindric.hr/o-nama/dodatne-usluge/agencija-za-zastupanje-u-osiguranju-suzi" target="_blank"><img class="bckgimg2" src="img/agencija-suzi.jpg"></a></li>
                    <li><a href="http://www.sisak.hr/" target="_blank"><img class="bckgimg2" src="img/sisak.jpg"></a></li>
                    <li><a href="http://www.basburek.com/" target="_blank"><img class="bckgimg2" src="img/bas-burek.jpg"></a></li>
                    <li><a href="http://www.crosig.hr/" target="_blank"><img class="bckgimg2" src="img/crosig.jpg"></a></li>
                    <li><a href="http://www.hapcic.hr/" target="_blank"><img class="bckgimg2" src="img/hapcic.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    {!! $articles->render() !!}

@stop