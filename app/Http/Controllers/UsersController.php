<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
            'pfp' => 'required',
        ]);

        Users::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Users created successfully.');
    }

    public function show($users)
    {
        return view('users.show', compact('users'));
    }

    public function edit($users)
    {
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $users)
    {
        $request->validate([
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
            'pfp' => 'required',
        ]);

        $users->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Users updated successfully.');
    }

    public function destroy($users)
    {
        $users->delete();

        return redirect()->route('users.index')
            ->with('success', 'Users deleted successfully.');
    }
}
