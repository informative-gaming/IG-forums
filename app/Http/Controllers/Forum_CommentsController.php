<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Forum_Comments;

class Forum_CommentsController extends Controller
{
    public function index()
    {
        $forum_comments = Forum_Comments::all();
        return view('forum_comments.index', compact('forum_comments'));
    }

    public function create()
    {
        return view('forum_comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'forum_threads_id' => 'required',
            'text' => 'required',
            'upvotes' => 'required',
            'created_by_acc_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        Forum_Comments::create($request->all());

        return redirect()->route('forum_comments.index')
            ->with('success', 'Forum_Comments created successfully.');
    }

    public function show($forum_comments)
    {
        return view('forum_comments.show', compact('forum_comments'));
    }

    public function edit($forum_comments)
    {
        return view('forum_comments.edit', compact('forum_comments'));
    }

    public function update(Request $request, $forum_comments)
    {
        $request->validate([
            'id' => 'required',
            'forum_threads_id' => 'required',
            'text' => 'required',
            'upvotes' => 'required',
            'created_by_acc_id' => 'required',
            'updated_at' => 'required',
            'created_at' => 'required',
        ]);

        $forum_comments->update($request->all());

        return redirect()->route('forum_comments.index')
            ->with('success', 'Forum_Comments updated successfully.');
    }

    public function destroy($forum_comments)
    {
        $forum_comments->delete();

        return redirect()->route('forum_comments.index')
            ->with('success', 'Forum_Comments deleted successfully.');
    }
}
