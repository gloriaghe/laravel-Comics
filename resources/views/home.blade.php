@extends('templates.base')

@section('pageTitle', 'Comics')

@section('pageMain')

<section id="jumbo"></section>

<section id="card">
    <div id="containerCard">
        <div id="title">CURRENT SERIES</div>
        @foreach ($arrComics as $comicItem)
        <a href="/{{$comicItem['id']}}">
            <img src="{{$comicItem['thumb']}}" alt="{{$comicItem['series']}}">
            <span>{{$comicItem['series']}}</span>
        </a>

      @endforeach
    </div>
    <button>
        <a href="#">LOAD MORE</a>
    </button>
</section>

<section id="link">
    <div id="containerBuy">
        <div>
            <a href="#">
                <img src="images/buy-comics-digital-comics.png" alt="DIGITAL COMICS">
                <span>DIGITAL COMICS</span>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="images/buy-comics-merchandise.png" alt="DC MERCHANDISE">
                <span>DC MERCHANDISE</span>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="images/buy-comics-shop-locator.png" alt="SUBSCRIPTION">
                <span>SUBSCRIPTION</span>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="images/buy-comics-subscriptions.png" alt="COMIC SHOP LOCATOR">
                <span>COMIC SHOP LOCATOR</span>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="images/buy-dc-power-visa.svg" alt="DC POWER VISA">
                <span>DC POWER VISA</span>
            </a>
        </div>
    </div>
</section>
@endsection
