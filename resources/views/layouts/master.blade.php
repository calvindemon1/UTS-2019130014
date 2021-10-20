<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title','home')|Pokédex</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <!-- Responsive navbar-->

    <!-- Header-->
    <header class="bg-dark py-2 mb-5">
        <div class="text-center">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo/pokedex-logo.png') }}"></a>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>


    @include('components.footer')
</body>

</html>
