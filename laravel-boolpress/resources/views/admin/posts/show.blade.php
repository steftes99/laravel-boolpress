@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card p-5">
            <h1 class="card-title py-3">{{ $post->title }}</h1>
            <h3 class="card-subtitle">Scritto da: {{ $post->author }}</h3>
            <p class="card-text py-3">{{ $post->content }}</p>
        </div>
    </div>
@endsection