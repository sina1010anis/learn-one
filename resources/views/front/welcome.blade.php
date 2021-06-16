<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <script src="https://kit.fontawesome.com/d4c29863c5.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="shit">
    <div id="row">
        <div id="app">
            @yield('index')
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
