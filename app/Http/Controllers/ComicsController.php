<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comic = new Comic;
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'description' => 'nullable|string',
                'thumb' => 'required|url',
                'price' => 'required|string',
                'series' => 'required|string',
                'sale_date' => 'required|date',
                'type' => 'required|string',
                'artists' => 'required|string',
                'writers' => 'required|string'
            ],
            [
                'title.required' => 'Il campo Titolo è obbligatorio',
                'thumb.required' => 'Il campo Immagine di copertina è obbligatorio',
                'thumb.url' => 'Il campo Immagine di copertina deve essere un url',
                'price.required' => 'Il campo Prezzo è obbligatorio',
                'series.required' => 'Il campo Serie è obbligatorio',
                'sale_date.required' => 'Il campo Data di uscita è obbligatorio',
                'type.required' => 'Il campo Tipo di fumetto è obbligatorio',
                'artists.required' => 'Il campo Artisti è obbligatorio',
                'writers.required' => 'Il campo Scrittori è obbligatorio',
            ]
        );

        $comic = $request->all();
        $comic['artists'] = explode(', ', $comic['artists']);
        $comic['writers'] = explode(', ', $comic['writers']);
        $new_comic = new Comic();
        $new_comic->fill($comic);
        $new_comic->save();

        return to_route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $updated_comic = $request->all();
        $updated_comic['artists'] = explode(', ',  $updated_comic['artists']);
        $updated_comic['writers'] = explode(', ',  $updated_comic['writers']);
        $comic->fill($updated_comic);
        $comic->save();

        return to_route('comics.show', $comic->id)->with('message', 'Modifica effettuata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', "Il fumetto \"$comic->title\" é stato eliminato correttamente!");
    }
}
