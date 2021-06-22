@extends('default')

@section('contenuto-centrale')

<div class="card-container">
    <div class="container d-flex">
        <div class="current">
        <h3>CURRENT SERIES</h3>
        </div>

        @foreach($comicsList as $key => $comic)

        <div class="card">
            <div class="card-img">
            <a href="{{ route('pagina-comic-single', ['index' => $key]) }}">
            <img src="{{ $comic['thumb'] }}" alt="">
            </a>
            </div>
            <a href="{{ route('pagina-comic-single', ['index' => $key]) }}" class="titolo">
            <p class="titolo"><strong > {{ $comic['title'] }}</strong></p>
            </a>
        </div>


        @endforeach

        <h5 class="load">LOAD MORE</h5>
    </div>
    
</div>
<div class="mid-bar">
<div class="container d-flex">
<div class="d-flex card-mid"><a href="#" class="d-flex"><img src="{{asset('img\buy-comics-digital-comics.png')}}" alt=""><p>DIGITAL COMICS</p></a></div>
<div class="d-flex card-mid"><a href="#" class="d-flex"><img src="{{asset('img\buy-comics-merchandise.png')}}" alt=""><p>DC MERCHANDISE</p></a></div>
<div class="d-flex card-mid"><a href="#" class="d-flex"><img src="{{asset('img\buy-comics-subscriptions.png')}}" alt=""><p>SUBSCRIPTION</p></a></div>
<div class="d-flex card-mid"><a href="#" class="d-flex"><img src="{{asset('img\buy-comics-shop-locator.png')}}" alt=""><p>COMIC SHOP LOCATOR</p></a></div>
<div class="d-flex card-mid"><a href="#" class="d-flex"><img src="{{asset('img\buy-dc-power-visa.svg')}}" alt=""><p>DC POWER VISA</p></a></div>
</div>
</div>

@endsection
