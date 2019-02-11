<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <header-component current-page="{{ $title }}"></header-component>
        <div id="page">
            <home-component></home-component>
            <sidebar-component></sidebar-component>
        </div>
        <footer-component></footer-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
