<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('style')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>{{ isset($title) ? $title : 'New Document' }}</title>
</head>
<body>
<div>
   @yield('content')
</div>
@stack('script')
<script src="{{ asset('js/common.js') }}"></script>
</body>
</html>
