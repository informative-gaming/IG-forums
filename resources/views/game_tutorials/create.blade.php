@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('game_tutorials.store') }}">
        @csrf
        <div class="form-group">
            <label for="game_id">game_id</label>
            <input type="text" name="game_id" class="form-control" id="game_id" placeholder="game_id">
        </div>
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="description">
        </div>
        <div class="form-group">
            <label for="text">text</label>
            <input type="text" name="text" class="form-control" id="text" placeholder="text">
        </div>
        <div class="form-group">
            <label for="video">video</label>
            <input type="text" name="video" class="form-control" id="video" placeholder="video">
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
