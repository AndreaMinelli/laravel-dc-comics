@php
    $links = config('main_banner_links');
@endphp

<section id="main-banner">
    <div class="container">
        <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['href'] }}">
                        <figure>
                            <img src="{{ Vite::asset('resources/img/' . $link['src']) }}" alt="{{ $link['text'] }}" />
                        </figure>
                        <p>{{ $link['text'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
