<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partials.header_links')

    <title>@yield('title')</title>

</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        @yield('main_content')
    </main>
    <footer>
        @include('partials.footer')

    </footer>
    
</body>
</html>