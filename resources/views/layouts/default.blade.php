<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
    <header>
            @include('partials.header')
    </header>
    
    @yield('content')
</body>
</html>