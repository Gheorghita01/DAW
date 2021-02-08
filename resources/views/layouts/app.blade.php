<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('../node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
    <nav>
    <ol>
    <li>
        <a href="{{ route('index') }}">Acasa</a>
    </li>
    <li>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
    </ol>
    </nav>
        @yield('content')
    </div>
    <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
</body>
</html>
