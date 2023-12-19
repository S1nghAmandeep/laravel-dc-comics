<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {

        $comics = Comic::all();

        return view('guest.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('guest.show', compact('comic'));
    }

    public function create()
    {
        return view('guest.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        // $newComic = new Comic();
        // $newComic->description = $data['description'];
        // $newComic->title = $data['title'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];

        // $newComic->save();

        $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);
    }

    public function edit(Comic $comic)
    {
        return view('guest.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }
}
