@extends('shared.layout')

@section('title', 'Comments list')

@section('content')
    <div class="row">
        <h1>No comments to display</h1>
        <br>
        <form name="add-comment-form" id="add-comment-form" method="post" action="{{route('comment.store')}}">
            @csrf
            <div class="mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input name="nick" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="basic-addon2">Title</span>
                <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon2">
            </div>
            <div class="mb-3">
                <span class="input-group-text">Comment</span>
                <textarea name="comment" class="form-control" aria-label="Comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
