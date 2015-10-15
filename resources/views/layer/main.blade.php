<!DOCTYPE html>
<html>
    <head>
        <title>NCBASE - архив</title>
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/fuelux.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/metisMenu.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/master.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="fuelux">
    <div id="wrapper">
        @include ('layer.navigation')
    <div id="page-wrapper">
        @include ('layer.errors')
        @yield('errors')
        @yield('content')
    </div>
    </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{  URL::asset('js/jquery.js') }}"></script>
    <script src="{{  URL::asset('js/bootstrap.js') }}"></script>
    <script src="{{  URL::asset('js/fuelux.js') }}"></script>
    <script src="{{  URL::asset('js/metisMenu.js') }}"></script>
    <script src="{{  URL::asset('js/sb-admin-2.js') }}"></script>

    

    @yield('script')


    </body>
</html>
