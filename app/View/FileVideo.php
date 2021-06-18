<?php


namespace App\View;


use App\Models\File_Video;
use App\Models\order_video;
use Illuminate\View\View;

class FileVideo implements ComposeInterface
{

    public function compose(View $view)
    {
        return $view->with('file_video_panel_user' , File_Video::orderBy('id' , 'asc')->get());
    }
}
