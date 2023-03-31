<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Laravel No.1</title>
    <link href="https://laravel.com/img/logomark.min.svg" rel="icon">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @if (Route::has('login'))
        @auth
            <div class="top">
                @component('main-component.app-bar')
                @endcomponent
            </div>

            <div class="dark-bg content relative min-h-screen">
                @component('main-component.app-side')
                @endcomponent
                <div class="px-5 py-5 sm:px-8 lg:px-10">
                    @yield('route-content')
                </div>
            </div>

            <div class="footer">
                @component('main-component.app-footer')
                @endcomponent
            </div>
        @else
            <div class="dark-bg">
                @yield('route-auth', view('main-component.auth-login'))
            </div>
        @endauth
    @endif

    <script src={{ asset('js/app.js') }}></script>
</body>

</html>
