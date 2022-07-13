@extends('templates.base')

@section('pageTitle', 'Pagina Fumetto')

@section('pageMain')
    <div id="blueBar">
        <div id="cardSingle">
            <img id="imgCard" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <a class="aCard" id="comicCard" href="#">COMIC BOOK</a>
            <a class="aCard" id="viewCard" href="#">VIEW GALLERY</a>
        </div>
    </div>
    <main id="cardPage">

        <section id="sectionPresentation">
            <div id="text">
                <h1>{{$comic['title']}}</h1>
                <div id="greenbar">
                    <div class="green" id="green1">
                        <div>
                            <span class="greenlight">U.S. Price: </span>
                            <span>{{$comic['price']}}</span>
                        </div>
                        <span class="greenlight">AVAILABLE</span>
                    </div>
                    <span class="green" id="green2">Check Availability</span>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div id="publicity">
                <h3>ADVERTISEMENT</h3>
                <img id="imgPublicity" src="{{asset('images/adv.jpg')}}" alt="publicity">
            </div>
        </section>
        <section id="sectionData">
            <div id="sectionDatabox">
                <div class="data">
                    <h2>Talent</h2>
                    <div>
                    <span>Art by:</span>
                    @foreach ($comic['artists'] as $item)
                    <span>{{$item}}</span>
                    @endforeach
                    </div>
                    <div>
                        <span>Written by:</span>
                        @foreach ($comic['writers'] as $item)
                        <span>{{$item}}</span>
                        @endforeach            </div>
                </div>
                <div class="data">
                    <h2>Specs</h2>
                    <div>
                        <span>Series:</span>
                        <span>{{$comic['series']}}</span>
                    </div>
                    <div>
                        <span>U.S. Price:</span>
                        <span>{{$comic['price']}}</span>
                    </div>
                    <div>
                        <span>On Sale Date:</span>
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
