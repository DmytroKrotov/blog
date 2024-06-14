<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsForm;
use App\Models\Comment;
use App\Services\NewsDbRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function __construct(
        protected NewsDbRepository $news
    ) {}
    public function showAll(): View
    {
        $news=$this->news->readAll();

        return view('news.index',['news'=>$news]);
    }

    public function showItem($id): View
    {
        $article=$this->news->readItem($id);

        $comments=Comment::where('newsId', $id)->get();

        return view('news.article',['article'=>$article,'comments'=>$comments]);
    }

    public function addGet(): View
    {
        return view('news.add');
    }

    public function addPost(NewsForm $newsForm)
    {
        $this->news->createItem($newsForm);

        return Redirect::route('news.index');
    }

}
