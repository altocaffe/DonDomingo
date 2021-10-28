<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>

        .font-poppins {
            font-family: 'Poppins', sans-serif
        }

        .font-nunito {
            font-family: 'Nunito', sans-serif
        }


    </style>
    <script type="application/javascript" src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/ec54d5b44f.js" crossorigin="anonymous"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<div id="app">
    @include("site.navbar")
    @yield('content')
    @include("site.footer")
</div>
@yield('scripts')
<body>
</body>
</html>
