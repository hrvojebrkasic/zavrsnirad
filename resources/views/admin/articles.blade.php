@extends('includes.dashboard')

@section('content')

    <div class="container-fluid">
        <h1>List of all articles</h1>
        <div class="col-md-8">
            <h2>Table</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Created At:</th>
                        <th>Updated At:</th>
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
                                <a class="btn btn-small btn-success btn-block" href="{{ URL::to('admin/' . $article->slug) }}">Show</a>
                            </td>
                            <td>
                                <!-- edit this article -->
                                <a class="btn btn-small btn-info btn-block" href="{{ URL::to('admin/' . $article->id . '/edit') }}">Edit</a>
                            </td>
                            <td>
                                <!-- delete the article -->
                                {!! Form::open(['url' => 'admin/' . $article->id, 'class' => 'pull-left']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-warning btn-block')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop