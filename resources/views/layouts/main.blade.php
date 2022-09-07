<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=@, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>DC Comic | @yield('title')</title>
</head>
<body>
    @include('includes.header')
    @yield('home')
    @include('includes.footer')
</body>
</html>