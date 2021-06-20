@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger">
                        <a class="set-font color-b-100" href="{{route('articleView')}}">
                            مقاله ها
                        </a>
                    </button>
                    <button type="button" class="btn btn-success">
                        <a class="set-font color-b-100" href="{{route('home')}}">
                            ویدیو ها
                        </a>
                    </button>
                </div>
                <br>
                <br>
                <h1 align="center" class="set-font color-b-600">مقاله ها</h1>
                <br>
                @if($order_video_panel_user->count() <= 0)
                    <h1 class="set-font color-b-700" align="center">هنوز محصولی ثبت نشده است</h1>
                @else
                    @foreach($order_article_panel_user as $video)
                        <div class="card">
                            <div class="card-header">{{ $video->articles->name }}</div>
                            <div class="card-body">
                                @foreach($file_article_panel_user as $file_video)
                                    @if($file_video->article_id == $video->articles->id)
                                        <div class="card">
                                            <div class="card-header">{{ $video->articles->name }}</div>
                                            <div class="card-body obj-center">
                                                <button type="button" class="btn btn-success">
                                                    <a href="{{\Illuminate\Support\Facades\URL::temporarySignedRoute('DLFileArticle',now()->addSeconds(10) , ['id' => $file_video->id])}}" class="set-font color-b-100">
                                                        دانلود
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <br>
                    @endforeach
                @endif
            </div>
        </div>
@endsection
