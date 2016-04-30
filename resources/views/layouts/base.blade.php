<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="noah,project noah,projnoah,cms,sns,laravel,cali,calicastle,cali castle">
    <meta name="description" content="优雅, 现代, 简洁与全能. 服务于快速建网站的站长. Project Noah">
    <meta name="author" content="Cali Castle">
    <meta name="canonical" content="https://docs.projnoah.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') :: Project Noah官方文档</title>

    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/noah.css">
    <link rel="icon" href="/favicon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/favicon.png">
    {{--<link rel="stylesheet" href="{!! elixir('assets/css/noah.css') !!}">--}}
</head>
<body class="language-php">

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <script>var titleAppender = ' :: Project Noah官方文档';</script>
    <script src="/assets/js/noah.js" pjax-script></script>
{{--    <script src="{{ elixir('assets/js/noah.js') }}"></script>--}}
</body>
</html>