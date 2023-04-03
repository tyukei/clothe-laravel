<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.index') }}">Techpit Clothes</a>
            <a class="fas fa-shopping-cart" href="{{ route('cart.index') }}"></a>
        </div>
    </nav>
    @yield('content')
</body>

</html>