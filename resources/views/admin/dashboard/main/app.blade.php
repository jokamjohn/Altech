<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    @include('css')

</head>
<body>

<div class="wrapper">

    @include('admin.dashboard.main.sidebar')

    <div class="main-panel">


        @include('admin.dashboard.main.nav')

        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        @include('admin.dashboard.main.footer')
    </div>


</div>
</body>

@include('js')

</html>