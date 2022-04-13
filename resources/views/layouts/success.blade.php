<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('includes.style')
    @stack('addon-style')
    @stack('prepend-style')
</head>

<body>
    @include('includes.navbaralternate')
    @yield('content')
    
    @stack('prepend-script')
    @include('includes.script') 
    @stack('addon-script')


</body>

</html>