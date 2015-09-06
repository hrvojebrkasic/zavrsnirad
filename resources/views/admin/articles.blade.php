@extends('includes.dashboard')

@section('content')

    <div class="container-fluid">
        <h1>Popis članaka</h1>
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naslov</th>
                        <th>Kreirano:</th>
                        <th>Izmjenjeno:</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>{{ $article->updated_at }}</td>
                            <td>
                                <!-- show the article -->
                                <a class="btn btn-small btn-success btn-block" href="{{ URL::to('admin/show/' . $article->slug) }}">Prikaži</a>
                            </td>
                            <td>
                                <!-- edit this article -->
                                <a class="btn btn-small btn-info btn-block" href="{{ URL::to('admin/edit/' . $article->id) }}">Izmijeni</a>
                            </td>
                            <td>
                                <!-- delete the article -->
                                <a class="btn btn-small btn-warning btn-block" href="{{ URL::to('admin/delete/' . $article->id) }}">Obriši</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop