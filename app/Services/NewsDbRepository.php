<?php

namespace App\Services;

use App\Http\Requests\NewsForm;
use App\Models\News;

class NewsDbRepository
{
    public function readAll()
    {
        return News::all();
    }
    public function readItem($id)
    {
        return News::find($id);
    }
    public function createItem(NewsForm $newsForm)
    {
        $form=$newsForm->validated();
        $newNews=new News();
        $newNews->summary=$form['title'];
        $newNews->short_description=$form['description'];
        $newNews->full_text=$form['article'];
        $newNews->save();
    }
}
