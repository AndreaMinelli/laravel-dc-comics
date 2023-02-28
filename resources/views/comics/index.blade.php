@extends('layouts.main')

@section('main-content')
    <section id="current-series">
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <ul class="row">
                @foreach ($comics as $comic)
                    <li class="comic-card">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                        </figure>
                        <p>{{ $comic['series'] }}</p>
                    </li>
                @endforeach
            </ul>
            <div class="load-comics">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
