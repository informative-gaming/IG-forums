<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Forum_Threads;

class Forum_ThreadsController extends Controller
{
    public function index()
    {
        $forum_threads = Forum_Threads::all();
        return view('forum_threads.index', compact('forum_threads'));
    }

    public function create()
    {
        return view('forum_threads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'forum_id' => 'required',
            'name' => 'required',
            'preview_text' => 'required',
            'created_by_users_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        Forum_Threads::create($request->all());

        return redirect()->route('forum_threads.index')
            ->with('success', 'Forum_Threads created successfully.');
    }

    public function show($forum_threads)
    {
        return view('forum_threads.show', compact('forum_threads'));
    }

    public function edit($forum_threads)
    {
        return view('forum_threads.edit', compact('forum_threads'));
    }

    public function update(Request $request, $forum_threads)
    {
        $request->validate([
            'id' => 'required',
            'forum_id' => 'required',
            'name' => 'required',
            'preview_text' => 'required',
            'created_by_users_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        $forum_threads->update($request->all());

        return redirect()->route('forum_threads.index')
            ->with('success', 'Forum_Threads updated successfully.');
    }

    public function destroy($forum_threads)
    {
        $forum_threads->delete();

        return redirect()->route('forum_threads.index')
            ->with('success', 'Forum_Threads deleted successfully.');
    }
}
