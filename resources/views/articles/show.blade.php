@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-7">
            <h1>{{ $article->title }}</h1>
            <article>
                {{ $article->content }}
            </article>
        @foreach($article->medias as $media)
            {{--            <img class="img" src="{{URL::asset('/img/'.$media->file_name)}}">--}}
            <a href="{{URL::asset('/img/'.$media->file_name)}}" data-lightbox="slike" data-title=""><img class="img" src="{{URL::asset('/img/'.$media->file_name)}}"></a>
        @endforeach
        </div>
        <div class="col-sm-5">
            <ul class="list-group-item">
                <li><a href="http://www.auto-promet-sisak.hr/" target="_blank"><img class="bckgimg2" src="../img/autopromet.jpg"></a></li>
                <li><a href="http://www.cindric.hr/o-nama/dodatne-usluge/agencija-za-zastupanje-u-osiguranju-suzi" target="_blank"><img class="bckgimg2" src="../img/agencija-suzi.jpg"></a></li>
                <li><a href="http://www.sisak.hr/" target="_blank"><img class="bckgimg2" src="../img/sisak.jpg"></a></li>
                <li><a href="http://www.basburek.com/" target="_blank"><img class="bckgimg2" src="../img/bas-burek.jpg"></a></li>
                <li><a href="http://www.crosig.hr/" target="_blank"><img class="bckgimg2" src="../img/crosig.jpg"></a></li>
                <li><a href="http://www.hapcic.hr/" target="_blank"><img class="bckgimg2" src="../img/hapcic.png"></a></li>
            </ul>
        </div>
    </div>
@stop