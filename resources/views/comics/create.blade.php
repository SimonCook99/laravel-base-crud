@extends('layouts.base');

@section('title', "Aggiunta nuovo fumetto")

@section('main-content')

    <main class="container">

        <h1>Aggiungi fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{route("comics.store")}}">
        
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label" >Nome del formato</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}">
            </div>

            <div class="form-floating mb-3">
    
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">{{old("description")}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label" >Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old("thumb")}}">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label" >Prezzo del fumetto</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old("price")}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old("series")}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data del fumetto</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old("sale_date")}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >categoria del fumetto</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old("type")}}">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </main>

@endsection