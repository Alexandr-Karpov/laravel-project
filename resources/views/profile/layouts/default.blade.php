<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'InterProv') }} - лучший интерент-провайдер!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{mix('css/common.css')}}">
</head>
<body>

@include('main.layouts.blocks.nav.index')
<div class="content-block">
    @yield('content')
</div>



<script src="{{mix('js/app.js')}}"></script>

</body>
</html>

