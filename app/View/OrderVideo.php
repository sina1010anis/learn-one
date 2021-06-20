<?php


namespace App\View;


use App\Models\order_article;
use App\Models\order_video;
use Illuminate\View\View;

class OrderVideo implements ComposeInterface
{
    public function compose(View $view)
    {
        if(auth()->check())
            return $view->with('order_video_panel_user' , order_video::where(['user_id' => auth()->user()->id , 'status' => '200'])->get());
    }
}
