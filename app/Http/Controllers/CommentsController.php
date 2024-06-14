<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Services\CommentsDbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CommentsController extends Controller
{
    public function __construct(protected CommentsDbRepository $commentDbRepository)
    {

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addGet($newsId):View
    {
        return view('comments.create',['newsId' => $newsId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addPost(CommentForm $request)
    {
        $this->commentDbRepository->createItem($request);
        return Redirect::route('news.index');
    }


}
