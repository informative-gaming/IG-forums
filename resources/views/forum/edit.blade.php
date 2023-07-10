@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('forum.update', [${table_name.lower().rstrip("s")}->{table_name}_id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="game_id">game_id</label>
            <input type="text" name="game_id" value="{ $forum->game_id }" class="form-control" id="game_id" placeholder="game_id">
        </div>
        <div class="form-group">
            <label for="updated_at">updated_at</label>
            <input type="text" name="updated_at" value="{ $forum->updated_at }" class="form-control" id="updated_at" placeholder="updated_at">
        </div>
        <div class="form-group">
            <label for="created_at">created_at</label>
            <input type="text" name="created_at" value="{ $forum->created_at }" class="form-control" id="created_at" placeholder="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
