<?php


namespace App\View;


use Illuminate\View\View;

class Title implements ComposeInterface
{
    public function compose(View $view)
    {
        return $view->with('title' , 'Learn One ☺☺');
    }
}
