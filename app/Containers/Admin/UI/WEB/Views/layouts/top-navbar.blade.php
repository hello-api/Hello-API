<!DOCTYPE html>
<html lang="es">
<head>
    {{-- pace --}}
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <link href="{{ asset('plugins/pace/themes/blue/pace-theme-flash.css') }}" rel="stylesheet">

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'AppName') }} | @yield('title')</title>

    {{-- app css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- compiled plugins --}}
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    @yield ('styles')
</head>

<body class="layout-top-nav skin-black-light">
    <div id="wrapper">

        {{-- main header navbar --}}
        @include ('admin::partials.header-navbar')
        {{-- main header navbar --}}

        <div class="content-wrapper">
            
            {{-- main content --}}
            @yield ('content')
            {{-- /main content --}}

        </div>

        {{-- main footer --}}
        @include ('admin::partials.footer')
        {{-- main footer --}}

    </div>

    <!-- scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    {{-- app js --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- compiled plugins --}}
    <script src="{{ asset('js/plugins.js') }}"></script>

    @yield ('scripts')
</body>

</html>