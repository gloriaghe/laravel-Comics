@extends('templates.base')

@section('pageTitle', 'Pagina Fumetto')

@section('pageMain')

<h1>{{$comic['series']}}</h1>
<img src="{{$comic['series']}}" alt="">
@endsection
