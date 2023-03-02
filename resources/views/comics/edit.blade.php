@extends('layouts.main')

@section('main-content')
    <section id='edit-comic' class="form">
        <div class="container">
            <h1>Modifica Fumetto</h1>
            @include('includes.comics.form')
        </div>
    </section>
@endsection
