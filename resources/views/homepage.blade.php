<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hompage</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="top">
        @component('main-component.app-bar')
        @endcomponent
    </div>

    <div class="content">
        @component('main-component.app-side')
        @endcomponent
        @yield('route-content')
    </div>

    <div class="footer">
        @component('main-component.app-footer')
        @endcomponent
    </div>
</body>

</html>
