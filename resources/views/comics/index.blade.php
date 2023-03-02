@extends('layouts.main')

@section('main-content')
    <section id="comics">
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <ul class="row">
                @if (session('message'))
                    <div class="col-12 alert">
                        {{ session('message') }}
                    </div>
                @endif
                @foreach ($comics as $comic)
                    <li class="comic-card">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <figure>
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" />
                            </figure>
                        </a>
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <p>{{ $comic->series }}</p>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="other-comics">
                <a href="{{ route('comics.create') }}">ADD COMIC</a>
                <button>LOAD MORE</button>
            </div>
        </div>
        @include('includes.main_banner')
    </section>
@endsection
