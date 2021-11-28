<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('mdb/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>
</body>

</html>