<!DOCTYPE html>
<html lang="hu">
    <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Autók</title>
        <!-- Scripts -->
        <!--<script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>-->
        <!-- Styles -->
        <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}" >
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">-->
</head>
<body>
    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="{{ route('makers.index') }}">Gyártók</a></li>
                </ul>
            </nav>
        </div>
    </header>
<main>
       @yield('content')
</main>
<footer>
<p>&copy; 2025 Jenei Kitti</p>
</footer>
</body>
</html>