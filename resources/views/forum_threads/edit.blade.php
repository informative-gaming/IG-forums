@extends('layouts.base')

@section('content')
    <h1>{{ $title }}</h1>
    <form method="POST" action="{{ route('forum_threads.update', [${table_name.lower().rstrip("s")}->{table_name}_id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="forum_id">forum_id</label>
            <input type="text" name="forum_id" value="{ $forum_thread->forum_id }" class="form-control" id="forum_id" placeholder="forum_id">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" value="{ $forum_thread->name }" class="form-control" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="preview_text">preview_text</label>
            <input type="text" name="preview_text" value="{ $forum_thread->preview_text }" class="form-control" id="preview_text" placeholder="preview_text">
        </div>
        <div class="form-group">
            <label for="created_by_users_id">created_by_users_id</label>
            <input type="text" name="created_by_users_id" value="{ $forum_thread->created_by_users_id }" class="form-control" id="created_by_users_id" placeholder="created_by_users_id">
        </div>
        <div class="form-group">
            <label for="updated_at">updated_at</label>
            <input type="text" name="updated_at" value="{ $forum_thread->updated_at }" class="form-control" id="updated_at" placeholder="updated_at">
        </div>
        <div class="form-group">
            <label for="created_at">created_at</label>
            <input type="text" name="created_at" value="{ $forum_thread->created_at }" class="form-control" id="created_at" placeholder="created_at">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
