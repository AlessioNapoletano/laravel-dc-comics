<?php

namespace App\Http\Controllers;
use App\Models\Comic as Comic;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create() {
        return view('comics.create');
    }

    public function store(Request $request) {
        $newComic = new Comic();
        $request->validate(
            [
                "title" => "required",
                "description" => "required",
                "thumb" => "required",
                "description" => "required",
                "price" => "required",
                "series" => "required",
                "sale_date" => "required",
                "type" => "required",

            ],
            [
                "title.required" => "Devi inserire il titolo, non è che puoi non inserirlo LO DEVI INSERIRE"
            ]);
        $data = $request->all();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    public function edit(Comic $comic) {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic) {
        $comic->update($request->all());

        return redirect()->route('comics.show', $comic->id);

    }

    public function destroy(Comic $comic) {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
