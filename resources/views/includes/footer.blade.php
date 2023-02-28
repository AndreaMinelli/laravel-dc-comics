@php
    $social_links = config('footer_social');
    $footer_nav_links = config('footer_nav_links');
@endphp

<footer>
    <div class="footer-top">
        <div class="container row">
            <div>
                <div class="footer-nav">
                    @foreach ($footer_nav_links as $key => $links)
                        <div class="col">
                            <h4>{{ $key }}</h4>
                            <ul>
                                @foreach ($links as $link)
                                    <li>
                                        <a href="{{ $link['href'] }}"> {{ $link['text'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="terms">
                    <p>All Site Content TM and &copy; 2020 DC Entertainment, unless otherwise <a href="#">noted
                            here</a>. All rights reserved.</p>
                    <a href="#">Cookies Settings</a>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container row">
            <button type="button">SIGN-UP NOW!</button>
            <nav class="our-social">
                <p>FOLLOW US</p>
                <ul>
                    @foreach ($social_links as $link)
                        <li>
                            <a href="{{ $link['href'] }}">
                                <img src="{{ Vite::asset('resources/img/' . $link['src']) }}" alt="social pic" />
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>
