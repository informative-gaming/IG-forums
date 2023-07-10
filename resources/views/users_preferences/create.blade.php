@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('users_preferences.store') }}">
        @csrf
        <div class="form-group">
            <label for="users_id">users_id</label>
            <input type="text" name="users_id" class="form-control" id="users_id" placeholder="users_id">
        </div>
        <div class="form-group">
            <label for="theme">theme</label>
            <input type="text" name="theme" class="form-control" id="theme" placeholder="theme">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
