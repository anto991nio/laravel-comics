@extends('default')
@section('contenuto-centrale')
<div class="mid-bar"></div>
<div class="container">
    <img src="{{ $comic['thumb'] }}" alt="" class="img-comicDettagli">
    <div class="d-flex comicDettagli">
        <div>
            <h1>{{ strtoupper($comic['title']) }}</h1>
            <div class="disponibilita d-flex">
                <div class="d-flex">
                    <p>U.S. Price: <span>{{ $comic['price'] }}</span> </p>
                    <p>AVAILABLE</p>
                </div>
                <span>Check Availability</span>
            </div>
            <div>
                <p class="descrizione"><strong>{{ $comic['description'] }}</strong> </p>
            </div>
        </div>
        <div class="adv">
            <h4>ADVERTISEMENT</h4>
            <img src="https://www.dccomics.com/sites/default/files/styles/blog-latest-blocks-440x330/public/field/image/DCPrideFL_blog_60c2d41b9d8885.62747924.jpg?itok=FD7mdC84" alt="">
        </div>
    </div>
</div>
<div class="tal-specs">
    <div class="d-flex container">
        <div class="talent">
            <h3>Talent</h3>
            <hr>
            <span>Art By:</span>
            @foreach($comic['artists'] as $artisti )
                <span>{{$artisti}}</span>
            @endforeach
            
            <hr>
            <span>Written By:</span>
            @foreach($comic['writers'] as $scrittori )
                <span>{{$scrittori}}</span>
            @endforeach
            <hr>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <hr>
            <span>Series:</span>
            <span>{{ $comic['series'] }}</span>
            <hr>
            <span>U.S. Price: </span>
            <span>{{ $comic['price'] }}</span>
            <hr>
            <span>On Sale Date: </span>
            <span>{{ $comic['sale_date'] }}</span>
            <hr>
        </div>
    </div>
</div>



@endsection
