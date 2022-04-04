@extends("layouts.base");

@section('title', "lista-fumetti")


@section('main-content')

    <div class="container">

        <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi un nuovo fumetto</a>

        @if (session('status'))
          <div id="prova" class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif


        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Copertina</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Categoria</th>
              </tr>
            </thead>
            <tbody>

                <!--scorro ogni singolo fumetto, e creo una riga della tabella per ogni elemento-->
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic["title"]}}</td>
                        <td>{{$comic["description"]}}</td>
                        <td>{{$comic["thumb"]}}</td>
                        <td>{{$comic["price"]}}</td>
                        <td>{{$comic["series"]}}</td>
                        <td>{{$comic["sale_date"]}}</td>
                        <td>{{$comic["type"]}}</td>

                        <td class="d-flex">
                          <a class="btn btn-primary mx-2" href="{{route("comics.show", $comic->id)}}">Mostra dettagli fumetto</a>
                          <a class="btn btn-warning mx-2" href="{{route("comics.edit", $comic->id)}}">Modifica fumetto</a>
                          
                          <!--Form per la canellazione di un elemento-->
                          <form method="POST" action="{{ route('comics.destroy', ["comic" =>$comic->id])}}" onclick = "return confirm('sicuro di cancellare il messaggio?');">
  
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn btn-danger mx-2">Cancella elemento corrente</button>

                          </form>
                          
                        
                        </td>
                        
                    </tr>
                @endforeach
                
                
              
            </tbody>
          </table>

    </div>
    
@endsection