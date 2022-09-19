{{--<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>--}}
    {{View::make('includes/head')}}
{{--</head>--}}
<body>
    {{View::make('includes/header')}}
    @yield('content')
    {{View::make('includes/footer')}}
    {{View::make('includes/scripts')}}
</body>
</html>
