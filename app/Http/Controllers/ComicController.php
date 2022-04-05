<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

use function GuzzleHttp\Promise\all;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ricavo tutti i fumetti da mostrare nella view "index"
        $comics = Comic::all();

        return view("comics.index", compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|min:5",
            "description" => "min:20",
            "thumb" => "nullable|url",
            "price" => "required|numeric|min:0",
            "series" => "required|",
            "sale_date" => "required",
            "type" => "required|min:5"
        ]);

        $data = $request->all();

        $comic = new Comic();

        $comic->fill($data);
        $comic->save();

        return redirect()->route("comics.index")->with("status", "elemento aggiunto correttamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        if($comic){
            return view("comics.edit", compact("comic"));
        }else{
            abort(404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            "title" => "required|min:5",
            "description" => "min:20",
            "thumb" => "required|url",
            "price" => "required|numeric|min:0",
            "series" => "required|",
            "sale_date" => "required",
            "type" => "required|min:5"
        ]);
        
        $data = $request->all();

        $comic->update($data);

        $comic->save();

        return redirect()->route("comics.index")->with("status", "elemento modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route("comics.index")->with("status", "elemento eliminato correttamente");
    }
}
