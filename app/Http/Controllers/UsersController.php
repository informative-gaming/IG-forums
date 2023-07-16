<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ig\Users;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]); 
        // Getting values from the blade template form
        $users = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'status' => 'default',
            'pfp' => 0
        ];


        DB::table('users')->insert($users);
        return redirect('/users')->with('success', 'User saved.');
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

    // CUSTOM ROUTING FUNCTIONS

    public function signup() {
        return view('users.create');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}