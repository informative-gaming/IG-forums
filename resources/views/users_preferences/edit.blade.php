@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('users_preferences.update', [${table_name.lower().rstrip("s")}->{table_name}_id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="users_id">users_id</label>
            <input type="text" name="users_id" value="{ $users_preference->users_id }" class="form-control" id="users_id" placeholder="users_id">
        </div>
        <div class="form-group">
            <label for="theme">theme</label>
            <input type="text" name="theme" value="{ $users_preference->theme }" class="form-control" id="theme" placeholder="theme">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
