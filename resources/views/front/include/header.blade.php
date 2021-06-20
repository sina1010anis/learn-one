<div class="header w-100">
    <span class="fl-right set-font f-20">
        <b>L</b>earn <mark style="background-color:#2929ff "><span class="color-b-100">One</span></mark>
    </span>
    <a href="{{route('login')}}" class="fl-left btn-login-and-register">
        @if(auth()->check())
            <i class="far fa-user color-b-800"></i><span class="fl-right set-font f-12 text-btn-login-and-register">{{auth()->user()->name}}</span>
        @else
            <i class="far fa-user color-b-800"></i><span class="fl-right set-font f-12 text-btn-login-and-register">ثبت نام</span>
        @endif
    </a>
</div>
