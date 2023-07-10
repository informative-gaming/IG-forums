@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('game.store') }}">
        @csrf
        <div class="form-group">
            <label for="game_name">game_name</label>
            <input type="text" name="game_name" class="form-control" id="game_name" placeholder="game_name">
        </div>
        <div class="form-group">
            <label for="picture">picture</label>
            <input type="text" name="picture" class="form-control" id="picture" placeholder="picture">
        </div>
        <div class="form-group">
            <label for="updated_at">updated_at</label>
            <input type="text" name="updated_at" class="form-control" id="updated_at" placeholder="updated_at">
        </div>
        <div class="form-group">
            <label for="created_at">created_at</label>
            <input type="text" name="created_at" class="form-control" id="created_at" placeholder="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
