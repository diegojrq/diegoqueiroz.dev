<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::
            with('jobHistory')->
            with('jobHistory.translations')->
            with('skillCompetencies')->
            with('skillCompetencies.skill')->
            with('skillCompetencies.competency')->
            with('skillCompetencies.competency.translations')->
            find($id);
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $book = User::findOrFail($id);
        $book->update($request->all());

        return $book;
    }

    public function delete(Request $request, $id)
    {
        $book = User::findOrFail($id);
        $book->delete();

        return 204;
    }
}
