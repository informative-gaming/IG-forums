<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Users_Preferences;

class Users_PreferencesController extends Controller
{
    public function index()
    {
        $users_preferences = Users_Preferences::all();
        return view('users_preferences.index', compact('users_preferences'));
    }

    public function create()
    {
        return view('users_preferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'users_id' => 'required',
            'theme' => 'required',
        ]);

        Users_Preferences::create($request->all());

        return redirect()->route('users_preferences.index')
            ->with('success', 'Users_Preferences created successfully.');
    }

    public function show($users_preferences)
    {
        return view('users_preferences.show', compact('users_preferences'));
    }

    public function edit($users_preferences)
    {
        return view('users_preferences.edit', compact('users_preferences'));
    }

    public function update(Request $request, $users_preferences)
    {
        $request->validate([
            'id' => 'required',
            'users_id' => 'required',
            'theme' => 'required',
        ]);

        $users_preferences->update($request->all());

        return redirect()->route('users_preferences.index')
            ->with('success', 'Users_Preferences updated successfully.');
    }

    public function destroy($users_preferences)
    {
        $users_preferences->delete();

        return redirect()->route('users_preferences.index')
            ->with('success', 'Users_Preferences deleted successfully.');
    }
}
