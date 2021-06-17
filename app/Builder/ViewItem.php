<?php


namespace App\Builder;


use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class ViewItem
{
    public function Video(Request $request)
    {
        $data = Video::find($request->id);
        return '<div class="group-btn-cls"><i @click="btn_cls_page_dec_item" class="fas fa-chevron-down fl-right f-20 pointer color-b-500"></i></div><br><br><span class="w-50 view-dec-item-show fl-right">'.
            '<h2 dir="rtl" align="right" class="set-font color-b-800">'.$data->name.'</h2>'.
            '<h5 dir="rtl" align="right" class="set-font color-b-500 f-11">4.2</h5>'.
            '<p dir="rtl" align="right" class="set-font color-b-700 f-12">'.$data->dec.'</p></span>'.
            '        <span class="w-50 view-dec-item-show fl-left view-dec-item-show-video">
            <span class="view-video-group">
                <video class="w-100 h-100" controls>'.
            '<source class="w-100 h-100" src="'.url('img/video/test'.'/'.$data->path_video).'">'.
            '                </video>
            </span>
        </span>'
            ;
    }
    public function Article(Request $request)
    {
        $data = Article::find($request->id);
        return '<div class="group-btn-cls"><i class="fas fa-chevron-down fl-right f-20 pointer color-b-500"></i></div><br><br><span class="w-50 view-dec-item-show fl-right">'.
            '<h2 dir="rtl" align="right" class="set-font color-b-800">'.$data->name.'</h2>'.
            '<h5 dir="rtl" align="right" class="set-font color-b-500 f-11">4.2</h5>'.
            '<p dir="rtl" align="right" class="set-font color-b-700 f-12">'.$data->dec.'</p></span>'
            ;
    }
}
