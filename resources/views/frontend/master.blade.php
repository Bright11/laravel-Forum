<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    <script src="{{asset('myjs/edito.js')}}" referrerpolicy="origin"></script>

<!---
<script>tinymce.init({selector:'textarea'});</script>
-->
</head>
<body>
    {{View::make('include.navbar')}}
    @yield('content')
    {{View::make('include.footer')}}
</body>
</html>
