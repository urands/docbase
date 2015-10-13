<!DOCTYPE html>
<html>
    <head>
        <title>NCBASE - архив</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
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

    <script src="{{  URL::asset('js/scripts.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->

    @yield('script')


    </body>
</html>
