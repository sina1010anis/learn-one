<?php


namespace App\View;


use App\Models\order_article;
use App\Models\order_video;
use Illuminate\View\View;

class OrderArticle implements ComposeInterface
{

    public function compose(View $view)
    {
        return $view->with('order_article_panel_user' , order_article::where(['user_id' => auth()->user()->id , 'status' => '200'])->get());
    }
}
