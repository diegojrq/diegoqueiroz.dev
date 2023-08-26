<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Books::all();
    }

    public function show($id)
    {
        return Books::find($id);
    }

    public function store(Request $request)
    {
        return Books::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);
        $book->update($request->all());

        return $book;
    }

    public function delete(Request $request, $id)
    {
        $book = Books::findOrFail($id);
        $book->delete();

        return 204;
    }
}
