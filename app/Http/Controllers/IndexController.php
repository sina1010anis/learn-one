<?php

namespace App\Http\Controllers;

use App\Builder\ViewItem;
use App\Models\Article;
use App\Models\File_Video;
use App\Models\Video;
use Database\Factories\ArticleFactory;
use Database\Factories\VideoFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.section.index');
    }

    public function ViewItem($name)
    {
        if ($name == 'article')
        {
            $data = Article::orderBy('id' , 'DESC')->get();
        }else{
            $data = Video::orderBy('id' , 'DESC')->get();
        }
        return view('front.section.selectItem' , compact('data'));
    }
    public function laboratory(){
        return ArticleFactory::new ()->count(20)->create();
    }
    public function ShowItem(Request $request)
    {
        $render = new ViewItem();
        if ($request->type == 0)
        {
            return $render->Video($request);
        }
        else
        {
            return $render->Article($request);
        }
    }
    public function DLFile($id , Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }else{
            $path = File_Video::whereId($id)->first();
            return response()->download('img/video/'.$path->path);
        }

    }
}
