<?php

namespace App\Http\Controllers;

use App\Builder\ViewItem;
use App\Models\Article;
use App\Models\FackeData;
use App\Models\File_Article;
use App\Models\File_Video;
use App\Models\Video;
use App\QueryFilter\Active;
use App\QueryFilter\Sort;
use App\Request\TestRequest;
use Database\Factories\ArticleFactory;
use Database\Factories\FackeDataFactory;
use Database\Factories\VideoFactory;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
    public function DLFileVideo($id , Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }else{
            $path = File_Video::whereId($id)->first();
            return response()->download('img/video/'.$path->path);
        }
    }
    public function test()
    {
        $data=app(Pipeline::class)->send(FackeData::query())->through([Active::class,Sort::class])->thenReturn()->get();
        return $data;
    }
    public function articleView()
    {
        return view('user.section.article' );
    }

    public function DLFileArticle($id,Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }else{
            $path = File_Video::whereId($id)->first();
            return response()->download('img/video/'.$path->path);
        }
    }
}
