<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FRN</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .py-4 .container{
            margin-top: 10px;
        }
        .dp{
            /* padding: .375rem .75rem; */
            font-size: .9rem;
            color: black;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
        .dp .blog{
            color: black;
            margin-top: auto;
            margin-bottom: auto;
            padding-right:.5rem;
            padding-left:.5rem;
            text-decoration: none;
        }
        .dp:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
            <div class="container">
                @include('inc.message')
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Scripts -->
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    @include('inc.js')
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>
</html>
