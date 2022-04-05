@extends('layouts.base');

@section('title', "Modifica fumetto")

@section('main-content')

    <main class="container">

        <h1>Modifica fumetto</h1>

        <form method="POST" action="{{route("comics.update", ["comic" => $comic->id])}}">
        
            @csrf

            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label" >Nome del formato</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">{{$comic->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label" >Prezzo del fumetto</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data del fumetto</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >categoria del fumetto</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </main>

@endsection