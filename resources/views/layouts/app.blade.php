@extends('layouts.master')

@section('content')
	
	<div class="hidden-xs hidden-sm side-bar col-xs-1 grey-darken-3">

		<ul class="list-group">
		  	<li class="list-group-item text-center"><a href="{{ route('app.home') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		  	<li class="list-group-item text-center"><a href="{{ route('app.debt.search') }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
		  	<li class="list-group-item text-center"><a href="{{ route('debts.index') }}"><i class="fa fa-download" aria-hidden="true"></i></a></li>
		  	<li class="list-group-item text-center"><a href=""><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
		</ul>		

	</div>	

	<div class="main-bar col-xs-11">
		@yield('app-body')
	</div>	

@endsection