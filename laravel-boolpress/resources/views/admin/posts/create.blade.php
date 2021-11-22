@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <header>
            <h1>Crea un nuovo post</h1>
        </header>

        <main>
            <form action="{{ route('admin.posts.store') }}" method="POST">
                <div class="form-group">

                    <label for="title">Titolo del post</label>
                    <input class="form-control form-control-lg" type="text" 
                    placeholder="Inserisci il titolo del post" id="title" name="title" value="{{ old('title', $post->title) }}">
    
                    <label for="author">Inserisci l'autore</label>
                    <input class="form-control form-control-lg" type="text" 
                    placeholder="Inserisci l'autore del post" id="author" name="author" value="{{ old('author', $post->author) }}">
    
    
                    <label for="content">Inserisci il contenuto</label>
                    <textarea class="form-control form-control-lg mb-3" type="text" 
                    placeholder="Inserisci il contenuto del post" id="content" name="content" value="{{ old('content', $post->content) }}"></textarea>
    
                    <button type="submit" class="btn btn-primary">Crea</button>
                    <button type="reset" class="btn btn-secondary">Cancella i dati</button>
                </div>
            </form>
            
        </main>
    </div>
@endsection