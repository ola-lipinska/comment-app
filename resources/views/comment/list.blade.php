@extends('shared.layout')

@section('title', 'Comments list')

@section('content')
    <div class="row">
        <div class="col col-2">
            <aside>
                <div class="list-group">
                    @foreach ($comments as $comment)
                        <a href="{{ route('comment.show', ['comment' => $comment]) }}" class="list-group-item list-group-item-action @if($currentComment->id === $comment->id)active @endif">{{ Str::limit($comment->title, 15, $end='...') }}</a>
                    @endforeach
                </div>
            </aside>
        </div>
        <div class="col col-10">
            <main>
                <section>
                    <figure>
                        <blockquote class="blockquote">
                            <p>{{ $currentComment->comment }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Wrote by awesome <cite title="{{ $currentComment->nick }}">{{ $currentComment->nick }}</cite>
                        </figcaption>
                    </figure>
                    <p class="text-start text-break">

                    </p>
                </section>
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
            </main>
        </div>
    </div>
@endsection
