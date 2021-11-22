@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <header>
            <h1>Post pubblicati</h1>

            
                <a href="{{ route('admin.posts.create') }}">
                    <button type="button" class="btn btn-dark my-4">Crea un nuovo post</button>
                </a>
            
        </header>

        <table class="table table-bordered">
            <thead>
                <th class="col">Titolo</th>
                <th class="col">Autore</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="{{ route('admin.posts.show', $post->id ) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->author }}</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection