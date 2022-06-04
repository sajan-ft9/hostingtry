<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website
    </title>
    <link
        rel="stylesheet"
        href="{{ URL('css/style.css') }}"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <style>
        .active{
           color: red; 
        }
    </style>
</head>

<body>
    <header>
        <!-- Navigation -->
        @include('layout.header')
    </header>
    {{-- header --}}

    @yield('content')

    <!-- Footer -->
    <footer>
        @include('layout.footer')
    </footer>
</body>
</html>