<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Game_Tutorials;

class Game_TutorialsController extends Controller
{
    public function index()
    {
        $game_tutorials = Game_Tutorials::all();
        return view('game_tutorials.index', compact('game_tutorials'));
    }

    public function create()
    {
        return view('game_tutorials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'game_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'video' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        Game_Tutorials::create($request->all());

        return redirect()->route('game_tutorials.index')
            ->with('success', 'Game_Tutorials created successfully.');
    }

    public function show($game_tutorials)
    {
        return view('game_tutorials.show', compact('game_tutorials'));
    }

    public function edit($game_tutorials)
    {
        return view('game_tutorials.edit', compact('game_tutorials'));
    }

    public function update(Request $request, $game_tutorials)
    {
        $request->validate([
            'id' => 'required',
            'game_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'video' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        $game_tutorials->update($request->all());

        return redirect()->route('game_tutorials.index')
            ->with('success', 'Game_Tutorials updated successfully.');
    }

    public function destroy($game_tutorials)
    {
        $game_tutorials->delete();

        return redirect()->route('game_tutorials.index')
            ->with('success', 'Game_Tutorials deleted successfully.');
    }
}
