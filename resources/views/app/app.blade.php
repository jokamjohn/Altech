<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @include('css')

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>

<div class="wrapper">

    @include('app.nav')

    <div class="content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>

</div>
@include('js')
{{--<!-- JavaScripts -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
