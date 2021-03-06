<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC comics | @yield('title')</title>
</head>
<body>

@include('partials.header', ['links'=>config('header_links')])


<main>
@yield("content")
</main>

@include('partials.footer', ['links1'=>config('footer_links1'), 'links2' =>config('footer_links2'),  'links3' =>config('footer_links3'), 'links4' =>config('footer_links4'), 'socials' =>config('footer_socials')])
    


<script src="{{ asset('js/app.js') }}"><script>
</body>
</html>