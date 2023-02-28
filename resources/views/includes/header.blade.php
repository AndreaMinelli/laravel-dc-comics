@php
    $links = config('header_links');
@endphp

<header>
    <div class="header-top">
        <div class="container">
            <p>DC POWER&TRADE;VISA&reg;</p>
            <p class="more-site">
                ADDITIONAL DC SITE
                <i class="fa-solid fa-caret-down"></i>
            </p>
        </div>
    </div>
    <div class="container row">
        {{-- Logo DC --}}
        <figure>
            <a href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo" />
            </a>
        </figure>
        <nav>
            {{-- Lista link pagine --}}
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ route($link['url']) }}">{{ $link['text'] }} @if ($loop->last)
                                <i class="fa-solid fa-caret-down"></i>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        {{-- Search form --}}
        <form action="#">
            <div class="wrapper">
                <input type="text" placeholder="Search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </div>
    <div class="jumbotron"></div>
</header>
