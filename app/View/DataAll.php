<?php


namespace App\View;


use Illuminate\Support\Facades\View;

class DataAll
{
    public function Data()
    {
        View::composer('*' , Title::class);
    }
}
