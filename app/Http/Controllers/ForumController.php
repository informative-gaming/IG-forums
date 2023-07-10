<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Forum;

class ForumController extends Controller
{
    public function index()
    {
        $forum = Forum::all();
        return view('forum.index', compact('forum'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'game_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        Forum::create($request->all());

        return redirect()->route('forum.index')
            ->with('success', 'Forum created successfully.');
    }

    public function show($forum)
    {
        return view('forum.show', compact('forum'));
    }

    public function edit($forum)
    {
        return view('forum.edit', compact('forum'));
    }

    public function update(Request $request, $forum)
    {
        $request->validate([
            'id' => 'required',
            'game_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        $forum->update($request->all());

        return redirect()->route('forum.index')
            ->with('success', 'Forum updated successfully.');
    }

    public function destroy($forum)
    {
        $forum->delete();

        return redirect()->route('forum.index')
            ->with('success', 'Forum deleted successfully.');
    }
}
