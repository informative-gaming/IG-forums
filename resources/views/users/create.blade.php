@extends('layouts.base')

@section('content')
    
    <form method="POST" action="{{ url('users/store') }}">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <!--<div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" id="status" placeholder="Status">
        </div>
        <div class="form-group">
            <label for="pfp">Profile Picture</label>
            <input type="text" name="pfp" class="form-control" id="pfp" placeholder="Profile Picture">
        </div>-->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection

