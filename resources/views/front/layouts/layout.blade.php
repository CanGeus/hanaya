<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        {{ env('APP_NAME') }}
    </title>

    {{-- meta --}}
    @stack('meta')


    {{-- icon --}}
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- style --}}
    @include('front.layouts.top')
    @yield('top')

</head>

<body>
    <!-- navbar -->
    @include('front.layouts.nav')
    <!-- end navbar -->

    @yield('content')

    <!-- footer -->
    @include('front.layouts.footer')
    <!-- end footer -->

    @yield('bottom')
    @include('front.layouts.bottom')
</body>

</html>
