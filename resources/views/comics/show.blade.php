@extends('layouts.base');

@section('title', "fumetto dettaglio")

@section('main-content')

    <main class="container">
        <h1>Titolo: {{$comic["title"]}}</h1>
        <p>Storia: {{$comic["title"]}}</p>
        <img src="{{$comic["thumb"]}}" alt="miniatura">
        <p>prezzo: {{$comic["price"]}}</p>
        <p>serie: {{$comic["series"]}}</p>
        <p>Data di uscita: {{$comic["sale_date"]}}</p>
        <p>Categoria: {{$comic["type"]}}</p>

        <a class="btn btn-primary" href="{{route('comics.index')}}">Torna ala lista completa</a>

    </main>

@endsection