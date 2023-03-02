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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function destroy(string $id)
    {
        //
    }
}
