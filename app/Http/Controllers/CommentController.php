<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{
    public function index(): Response
    {
        $allComments = Comment::all();
        
        if($allComments->isEmpty())
        {
            return response(view('shared.soft_404'));
        }

        return response(redirect(route('comment.show', ['comment' => Comment::all()->first()])));
    }

    public function store(StoreCommentRequest $request): Response
    {
        $input = $request->all();

        $comment = Comment::create([
           'nick' => $input['nick'],
           'title' => $input['title'],
           'comment' => $input['comment']
        ]);

        return response(view('comment.list', ['currentComment' => $comment, 'comments' => Comment::all()]));
    }

    public function show(Comment $comment)
    {
        return response(view('comment.list', ['currentComment' => $comment, 'comments' => Comment::all()]));
    }
}
