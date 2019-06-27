<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
    <header>
            @include('partials.header')
    </header>
    @include('partials.messeges')
        <div class="container">
                <div class="row">
                    <div class="col-md-10">
                            @yield('content')
                    </div>
                </div>
            </div>
</body>
</html>