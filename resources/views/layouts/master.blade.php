<!DOCTYPE html>
<html>

    <head>	
        <!-- content of the head section -->
        @include('partials._head')

    </head>
    <body>
    
        <!-- Application's NavBar code -->
        @include('partials._navbar')

    	<!-- main dynamic content -->
    	@yield('content')    

        <!-- Include JS Code -->
        @include('partials._scripts')       

    </body>

</html>
