<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Hompage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="top">
        @component('main-component.app-bar')
        @endcomponent
    </div>

    <div class="content relative min-h-screen" style="background: #171923f2">
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

    <script src={{ asset('js/app.js') }}></script>
</body>

</html>
