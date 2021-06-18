<?php


namespace App\View;


use App\Models\File_Article;
use App\Models\File_Video;
use Illuminate\View\View;

class FileArticle implements ComposeInterface
{

    public function compose(View $view)
    {
        return $view->with('file_article_panel_user' , File_Article::orderBy('id' , 'asc')->get());
    }
}
