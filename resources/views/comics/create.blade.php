@extends('layouts.base');

@section('title', "Aggiunta nuovo fumetto")

@section('main-content')

    <main class="container">

        <h1>Aggiungi fumetto</h1>

        <form method="post" action="{{route("comics.store")}}">
        
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label" >Nome del formato</label>
                <input type="text" class="form-control" id="title" name="title" value="Pippo">
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis cum iste perferendis. Harum architecto, quod velit autem fugiat id inventore amet alias sed ipsum consequuntur iste tempora quia, facere placeat!</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label" >Indirizzo immagine</label>
                <input required type="text" class="form-control" id="thumb" name="thumb" value="https://www.miosito.it">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label" >Prezzo del fumetto</label>
                <input type="number" class="form-control" id="price" name="price" value="11">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label" >Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" value="Pippo">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label" >Data del fumetto</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="Pippo">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label" >categoria del fumetto</label>
                <input type="text" class="form-control" id="type" name="type" value="Pippo">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

    </main>

@endsection