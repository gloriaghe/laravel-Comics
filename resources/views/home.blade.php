@extends('templates.base')

@section('pageTitle', 'Comics')

@section('pageMain')

<section id="jumbo"></section>

<section id="card">
    <div id="containerCard">
        <div id="title">CURRENT SERIES</div>
        @foreach ($arrComics as $comic)
        <a href="#">
            <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
            <span>{{$comic['series']}}</span>
        </a>

      @endforeach
    </div>
    <button>
        <a href="#">LOAD MORE</a>
    </button>
</section>


@endsection
