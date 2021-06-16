<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.section.index');
    }

    public function ViewItem($name)
    {
        return view('front.section.selectItem');
    }
}
