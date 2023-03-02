@extends('layouts.main')

@section('main-content')
    <section id="comics-details">
        <div class="line-break"></div>
        <div class="container comic-details-top">
            <figure class="comic-thumb">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </figure>
            <div class="row">
                @if (session('message'))
                    <div class="col-12 alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-8">
                    <h3>{{ $comic->title }}</h3>
                    <div class="available">
                        <div class="price">
                            <p><span class="green-text">U.S. Price: </span>{{ $comic->price }}</p>
                            <p><span class="green-text">AVAILABLE</span></p>
                        </div>
                        <div class="check-availability">
                            <p>Check Availability</p>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <p class="comic-description">{{ $comic->description }}</p>
                </div>
                <div class="col-4">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="advertisement">
                </div>
            </div>
        </div>
        <div class="comic-details-bottom">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5>Talent</h5>
                        <ul>
                            <li>
                                <p>Art by:</p>
                                <div class="details">
                                    @foreach ($comic->artists as $artist)
                                        <a href="#">{{ $artist }}</a>
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <p>Written by:</p>
                                <div class="details">
                                    @foreach ($comic->writers as $writer)
                                        <a href="#">{{ $writer }} </a>
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Specs</h5>
                        <ul>
                            <li>
                                <p>Series:</p>
                                <div class="details type">
                                    <a href="#">{{ $comic->series }}</a>
                                </div>
                            </li>
                            <li>
                                <p>U.S. Price:</p>
                                <div class="details">
                                    {{ $comic->price }}
                                </div>
                            </li>
                            <li>
                                <p>On Sale Date:</p>
                                <div class="details">
                                    {{ $comic->getSaleDate() }}
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <a class="btn" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.main_banner')
    </section>
@endsection
