<?php

namespace App\Services;

use App\Http\Requests\CommentForm;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsDbRepository
{
    public function readAll()
    {
        return Comment::all();
    }
    public function readItem($id)
    {
        return Comment::find($id);
    }
    public function createItem(CommentForm $commentForm)
    {
        if(Auth::check())
        {
            $form=$commentForm->validated();
            $newComment=new Comment();
            $newComment->userId=Auth::user()->id;
            $newComment->newsId=$form['newsId'];
            $newComment->text=$form['comment'];

            $newComment->save();
        }

    }
}
