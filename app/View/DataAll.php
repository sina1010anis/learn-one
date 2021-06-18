<?php


namespace App\View;


use Illuminate\Support\Facades\View;

class DataAll
{
    public function Data()
    {
        View::composer('*' , Title::class);
        View::composer('*' , OrderVideo::class);
        View::composer('*' , OrderArticle::class);
        View::composer('*' , FileVideo::class);
        View::composer('*' , FileArticle::class);
    }
}
