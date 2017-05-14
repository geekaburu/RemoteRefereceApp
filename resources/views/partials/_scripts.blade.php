<!-- jQuery -->
<script type = "text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Jquery Ajax -->
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

<script type = "text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" ></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script type = "text/javascript" src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}" ></script>

<script type = "text/javascript" src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" ></script>

<!-- Group of JS Functions -->
<script type = "text/javascript" src="{{ asset('js/functions.js') }}" ></script>

{{-- Custom JS --}}
@yield('CustomScripts')




