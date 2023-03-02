@extends('layouts.main')

@section('main-content')
    <section id='edit-comic' class="form">
        <div class="container">
            <h1>Modifica Fumetto</h1>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" placeholder="Inserisci titolo" required
                            value="{{ $comic->title }}">
                    </div>
                    <div class="col-4">
                        <label for="thumb">Inserisci immagine copertina</label>
                        <input type="url" id="thumb" name="thumb" required value="{{ $comic->thumb }}">
                    </div>
                    <div class="col-4">
                        <label for="type">Inserisci il tipo di fumetto</label>
                        <input type="text" id="type" name="type" placeholder="comic book" required
                            value="{{ $comic->type }}">
                    </div>
                    <div class="col-12">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" rows="5" required>{{ $comic->description }}</textarea>
                    </div>
                    <div class="col-4">
                        <label for="price">Inserisci prezzo</label>
                        <input type="text" id="price" name="price" placeholder="$..." required
                            value="{{ $comic->price }}">
                    </div>
                    <div class="col-4">
                        <label for="series">Inserisci serie</label>
                        <input type="text" id="series" name="series" placeholder="Action Comics" required
                            value="{{ $comic->series }}">
                    </div>
                    <div class="col-4">
                        <label for="sale_date">Inserisci data di uscita</label>
                        <input type="date" id="sale_date" name="sale_date" required value="{{ $comic->sale_date }}">
                    </div>
                    <div class="col-6">
                        <label for="artists">Inserisci gli artisti</label>
                        <textarea name="artists" id="artists" rows="5" required>{{ implode(', ', $comic->artists) }}</textarea>
                    </div>
                    <div class="col-6">
                        <label for="writers">Inserisci gli scrittori</label>
                        <textarea name="writers" id="writers" rows="5" required>{{ implode(', ', $comic->writers) }}</textarea>
                    </div>
                    <button type="submit">Salva</button>
                </div>
            </form>
        </div>
    </section>
@endsection
