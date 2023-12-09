<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Site Info -->
    @yield('title')
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
    <link rel="stylesheet" href="{{asset('css/style.scss')}}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@400;600&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <header id="header">
            @yield('header')
        </header>
    
        <main id="main">
            @yield('content')
        </main>
    
        <footer id="footer">
            <small>&copy; 2023 Naritomo</small>
        </footer>
    </div>
</body>
</html>