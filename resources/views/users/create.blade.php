@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" class="form-control" id="password" placeholder="password">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input type="text" name="status" class="form-control" id="status" placeholder="status">
        </div>
        <div class="form-group">
            <label for="pfp">pfp</label>
            <input type="text" name="pfp" class="form-control" id="pfp" placeholder="pfp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
