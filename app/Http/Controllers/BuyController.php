<?php

namespace App\Http\Controllers;

use App\Buy\InterfaceTypeClass;
use App\Models\Article;
use App\Models\order_article;
use App\Models\order_video;
use App\Models\Video;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function BuyItem($type ,$id , order_article $article , InterfaceTypeClass $interfaceTypeClass , order_video $order_video)
    {
        if ($type == 1) {
            $data = Article::whereId($id)->first();
            $count = Article::whereId($id)->count();
            if ($count == 1){
                $article->user_id= auth()->user()->id;
                $article->article_id = $id;
                $article->price = $data->price;
                if($data->price == 0){
                    $article->status = '200';
                    $article->save();
                    return redirect()->route('home');
                }else{
                    $article->status = '200';
                    $article->save();
                    $interfaceTypeClass->send($data->price);
                }
            }else{
                return redirect()->route('home');
            }
        }elseif ($type == 0) {
            $data = Video::whereId($id)->first();
            $count = Video::whereId($id)->count();
            if ($count == 1){
                $order_video->user_id= auth()->user()->id;
                $order_video->video_id = $id;
                $order_video->price = $data->price;
                if($data->price == 0){
                    $order_video->status = '200';
                    $order_video->save();
                    return redirect()->route('home');
                }else{
                    $order_video->status = '200';
                    $order_video->save();
                    $interfaceTypeClass->send($data->price);
                }
            }else{
                return redirect()->route('home');
            }
        }
    }
    public function VerifyItem(InterfaceTypeClass $interfaceTypeClass)
    {
        $data = order_article::orderBy('id', 'DESC')->first();
        return $interfaceTypeClass->verify($data->price);
    }
}
