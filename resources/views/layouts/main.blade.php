<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ Setting::get('author') }}">
    <meta name="description" content="{{ Setting::get('desc') }}">
    <meta name="keywords" content="{{ Setting::get('keywords') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    @section('head')@show
    @section('styles')@show
</head>

<body>
  @section('body')@show
  @section('footer')@show
  @section('script')@show
</body>
</html>
