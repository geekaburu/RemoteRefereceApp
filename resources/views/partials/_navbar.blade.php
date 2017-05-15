<nav class="navbar navbar-default grey-darken-4">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a style="font-weight: 800;" class="navbar-brand" href="#">@if(Auth::check()){{Auth::user()->name}}@else<p>Welcome</p>@endif</a>               

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="{{ route('app.home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li><a href="{{ route('app.debt.search') }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                <li><a href="{{ route('debts.index') }}"><i class="fa fa-download" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-cogs" aria-hidden="true"></i></a></li>           
                <li style="padding:7px;">
                    <!-- Form to search customer information -->  
                    {!! Form::open(['url'=>'/logout']) !!}
                        <button style="background-color: transparent; color: #fff;" class="btn" type="submit">Logout</button>
                    {!! Form::close() !!}
                </li>
            @endif
        </ul>
    </div>
</nav>