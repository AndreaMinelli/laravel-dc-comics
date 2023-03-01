@extends('layouts.main')

@section('main-content')
    <section id='new-comic'>
        <div class="container">
            <h1>Aggiungi Fumetto</h1>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-4">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" placeholder="Inserisci titolo">
                    </div>
                    <div class="col-4">
                        <label for="thumb">Inserisci immagine copertina</label>
                        <input type="url" id="thumb" name="thumb">
                    </div>
                    <div class="col-4">
                        <label for="type">Inserisci il tipo di fumetto</label>
                        <input type="text" id="type" name="type" placeholder="comic book">
                    </div>
                    <div class="col-12">
                        <label for="description">Descrizione</label>
                        <textarea name="description" id="description" rows="5"></textarea>
                    </div>
                    <div class="col-4">
                        <label for="price">Inserisci prezzo</label>
                        <input type="text" id="price" name="price" placeholder="$...">
                    </div>
                    <div class="col-4">
                        <label for="series">Inserisci serie</label>
                        <input type="text" id="series" name="series" placeholder="Action Comics">
                    </div>
                    <div class="col-4">
                        <label for="sale_date">Inserisci data di uscita</label>
                        <input type="date" id="sale_date" name="sale_date">
                    </div>
                    <div class="col-6">
                        <label for="artists">Inserisci gli artisti</label>
                        <textarea name="artists" id="artists" rows="5"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="writers">Inserisci gli scrittori</label>
                        <textarea name="writers" id="writers" rows="5"></textarea>
                    </div>
                    <button type="submit">Aggiungi</button>
                </div>
            </form>
        </div>
    </section>
@endsection
