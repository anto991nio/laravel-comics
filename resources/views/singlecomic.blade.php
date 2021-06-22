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

            <div class="d-flex">
                <span class="credits"><strong>Art By:</strong></span>
                <div class="people">
                    @foreach($comic['artists'] as $artisti )
                    <span><strong>{{$artisti}}</strong></span>
                    @endforeach
                </div>
            </div>


            <div class="d-flex">
                <span class="credits"><strong>Written By:</strong></span>
                <div class="people">
                    @foreach($comic['writers'] as $scrittori )
                    <span><strong>{{$scrittori}}</strong></span>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="specs">
            <h3>Specs</h3>

            <div class="d-flex">
                <span class="credits"><strong>Series:</strong></span>
                <span><strong style="color: rgb(2, 130, 249)">{{ strtoupper($comic['series'] )}}</strong></span>
            </div>

            <div class="d-flex">
                <span class="credits"><strong>U.S. Price: </strong></span>
                <span><strong>{{ $comic['price'] }}</strong></span>
            </div>

            <div class="d-flex">
                <span class="credits"><strong>On Sale Date: </span>
                <span><strong>{{ $comic['sale_date'] }}</strong></span>
            </div>

        </div>
    </div>

</div>
<div class="cta-icons">
    <div class="container d-flex">
        <div class="d-flex">
            <p><strong>DIGITAL COMICS</strong></p>
            <div>
                <img class ="img-1"src="{{asset('img\cta-icons.png')}}" alt="">
            </div>
        </div>
        <div class="d-flex">
            <p><strong>SHOP DC</strong></p>
            <div>
                <img class ="img-2"src="{{asset('img\cta-icons.png')}}" alt="">
            </div>
        </div>

        <div class="d-flex">
            <p><strong>COMIC SHOP LOCATOR</strong></p>
            <div>
                <img class ="img-3"src="{{asset('img\cta-icons.png')}}" alt="">
            </div>

        </div>
        <div class="d-flex">
            <p><strong>SUBSCRIPTIONS</strong></p>
            <div>
                <img class ="img-4" src="{{asset('img\cta-icons.png')}}" alt="">
            </div>
        </div>
    </div>






    @endsection
