<div class="view-items w-100">
    @foreach($data as $item)
        <span class="one-item">
            <img src="{{url('img/img/'.$item->path)}}" alt="{{$item->name}}" title="{{$item->name}}">
            <p class="set-font f-12 text-right" align="right" dir="rtl">
                <span class="fl-right color-b-900">اموزش {{$item->name}}</span>
                <span class="fl-left color-b-600">4.2</span>
            </p>
            <br>
            @if($item->price <= 0)
                <p class="set-font f-12 text-right" align="center" dir="rtl">رایگان</p>
            @else
                <p class="set-font f-12 text-right" align="right" dir="rtl">
                    <span class="fl-right color-b-900">قیمت </span>
                    <span class="fl-left color-b-600">{{$item->price}}</span>
                </p>
                <br>
                <br>
            @endif
            <a class="btn-dec set-font f-12 btn-setting-item" @mouseover="set_item({{$item->id}} , {{$item->type}})"  @click="show_dec_item">برسی محصول</a>
            @if($item->price <= 0)
                <a class="btn-buy set-font f-12 btn-setting-item" href="{{route('BuyItem' , ['type' => $item->type , 'id' => $item->id])}}">اضافه به اکانت</a>
            @else
                <a class="btn-buy set-font f-12 btn-setting-item" href="{{route('BuyItem' , ['type' => $item->type , 'id' => $item->id])}}">خرید محصول</a>
            @endif
        </span>
    @endforeach
    <div class="page-view-item">
{{--        <div class="group-btn-cls">--}}
{{--            <i @click="btn_cls_page_dec_item" class="fas fa-chevron-down fl-right f-20 pointer color-b-500"></i>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <br>--}}
{{--        <span class="w-50 view-dec-item-show fl-right">--}}
{{--            <h2 dir="rtl" align="right" class="set-font color-b-800">Text Article</h2>--}}
{{--            <h5 dir="rtl" align="right" class="set-font color-b-500 f-11">4.2</h5>--}}
{{--            <p dir="rtl" align="right" class="set-font color-b-700 f-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid aspernatur aut consectetur deserunt dignissimos doloremque id impedit mollitia necessitatibus nostrum odit officiis perspiciatis quia recusandae sequi tempore, tenetur velit?</p>--}}
{{--        </span>--}}
{{--        <span class="w-50 view-dec-item-show fl-left view-dec-item-show-video">--}}
{{--            <span class="view-video-group">--}}
{{--                <video class="w-100 h-100" controls>--}}
{{--                    <source class="w-100 h-100" src="{{url('img/video/test'.'/'.'1.mp4')}}">--}}
{{--                </video>--}}
{{--            </span>--}}
{{--        </span>--}}
    </div>
    <div class="blur"></div>
</div>
