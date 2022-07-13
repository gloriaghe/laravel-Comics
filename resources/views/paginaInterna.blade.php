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
                    <div class="boxSingledate">
                        <h4>Art by:</h4>
                        <div class="lightblue">
                            @foreach ($comic['artists'] as $item)
                            <span>{{$item}}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="boxSingledate">
                        <h4>Written by:</h4>
                        <div class="lightblue">
                            @foreach ($comic['writers'] as $item)
                            <span>{{$item}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="data">
                    <h2>Specs</h2>
                    <div class="boxSingledate">
                        <h4>Series:</h4>
                        <span class="lightblue">{{$comic['series']}}</span>
                    </div>
                    <div class="boxSingledate">
                        <h4>U.S. Price:</h4>
                        <span class="green">{{$comic['price']}}</span>
                    </div>
                    <div class="boxSingledate">
                        <h4>On Sale Date:</h4>
                        <span class="green">{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
