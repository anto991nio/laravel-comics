<header>
        <div class="bg-blue">
            <div class="container">
                <div class="d-flex  inverse">
                    <p><strong> ADDITIONAL DC SITES &#xf0d7;</strong></p>
                    <p><strong>DC POWER&trade; VISA&reg;</strong></p>
                </div>
            </div>
        </div>
        <nav class="d-flex container">
            <img src="{{asset('img\dc-logo.png')}}" alt="">
            <ul class="d-flex">
                <li><strong><a href="{{ route('characteres') }}" class="{{Request::route()->getName() == 'characteres' ? 'active': ''}}">CHARACTERS</a> </strong></li>
                <li><strong><a href="{{ route('pagina-comic') }}" class="{{Request::route()->getName() == 'pagina-comic' ? 'active': ''}}">COMICS</a></strong></li>
                <li><strong><a href="{{ route('movies') }}" class="{{Request::route()->getName() == 'movies' ? 'active': ''}}" >MOVIES</a></strong></li>
                <li><strong><a href="{{ route('tv') }}" class="{{Request::route()->getName() == 'tv' ? 'active': ''}}">TV</a></strong></li>
                <li><strong><a href="{{ route('games') }}" class="{{Request::route()->getName() == 'games' ? 'active': ''}}">GAMES</a></strong></li>
                <li><strong><a href="{{ route('collectibles') }}" class="{{Request::route()->getName() == 'collectibles' ? 'active': ''}}">COLLECTIBLES</a></strong></li>
                <li><strong><a href="{{ route('videos') }}" class="{{Request::route()->getName() == 'videos' ? 'active': ''}}">VIDEOS</a></strong></li>
                <li><strong><a href="{{ route('fans') }}" class="{{Request::route()->getName() == 'fans' ? 'active': ''}}">FANS</a></strong></li>
                <li><strong><a href="{{ route('news') }}" class="{{Request::route()->getName() == 'news' ? 'active': ''}}">NEWS</a></strong></li>
                <li><strong><a href="{{ route('shop') }}" class="{{Request::route()->getName() == 'shop' ? 'active': ''}}">SHOP &#xf078;</a></strong></li>
            </ul>
            <div class="cerca">
                <input type="text" name="" id="" placeholder="               Search ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </div>
        </nav>
    </header>