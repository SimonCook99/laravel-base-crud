@extends("layouts.base");

@section('title', "lista-fumetti")


@section('main-content')

    <div class="container">

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

                <!--scorro-->
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic["title"]}}</td>
                        <td>{{$comic["description"]}}</td>
                        <td>{{$comic["thumb"]}}</td>
                        <td>{{$comic["price"]}}</td>
                        <td>{{$comic["series"]}}</td>
                        <td>{{$comic["sale_date"]}}</td>
                        <td>{{$comic["type"]}}</td>
                    </tr>
                @endforeach
                
                
              
            </tbody>
          </table>

    </div>
    
@endsection