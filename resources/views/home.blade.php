@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger">
                        <a class="set-font color-b-100" href="">
                            مقاله ها
                        </a>
                    </button>
                    <button type="button" class="btn btn-success">
                        <a class="set-font color-b-100" href="">
                            ویدیو ها
                        </a>
                    </button>
                </div>
                <br>
                <br>
                <h1 align="center" class="set-font color-b-600">ویدیو ها</h1>
                <br>
                @foreach($order_video_panel_user as $video)
                    <div class="card">
                        <div class="card-header">{{ $video->videos->name }}</div>
                        <div class="card-body">
                            @foreach($file_video_panel_user as $file_video)
                                @if($file_video->video_id == $video->videos->id)
                                    <div class="card">
                                        <div class="card-header">{{ $video->videos->name }}</div>
                                        <div class="card-body obj-center">
                                            <button type="button" class="btn btn-success">
                                                <a href="{{\Illuminate\Support\Facades\URL::temporarySignedRoute('DLFile',now()->addSeconds(10) , ['id' => $file_video->id])}}" class="set-font color-b-100">
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

            </div>
        </div>
@endsection
