@extends('layouts.main')

@section('main-content')
    <section id='new-comic' class="form">
        <div class="container">
            <h1>Aggiungi Fumetto</h1>
            @include('includes.comics.form')
        </div>
    </section>
@endsection
