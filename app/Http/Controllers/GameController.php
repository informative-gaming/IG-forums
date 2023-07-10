<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Game;

class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        return view('game.index', compact('game'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'game_name' => 'required',
            'picture' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        Game::create($request->all());

        return redirect()->route('game.index')
            ->with('success', 'Game created successfully.');
    }

    public function show($game)
    {
        return view('game.show', compact('game'));
    }

    public function edit($game)
    {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, $game)
    {
        $request->validate([
            'id' => 'required',
            'game_name' => 'required',
            'picture' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        $game->update($request->all());

        return redirect()->route('game.index')
            ->with('success', 'Game updated successfully.');
    }

    public function destroy($game)
    {
        $game->delete();

        return redirect()->route('game.index')
            ->with('success', 'Game deleted successfully.');
    }
}
