@extends('layouts.master')

@section('content')
	
	<div style="height: 650px; margin: 0; padding: 0;" class="col-xs-1 grey-darken-3">

		<ul class="list-group">
		  	<li class="list-group-item text-center active"><i class="fa fa-home" aria-hidden="true"></i></li>
		  	<li class="list-group-item text-center"><i class="fa fa-search" aria-hidden="true"></i></li>
		  	<li class="list-group-item text-center"><i class="fa fa-download" aria-hidden="true"></i></li>
		  	<li class="list-group-item text-center"><i class="fa fa-cogs" aria-hidden="true"></i></li>
		</ul>		

	</div>	

	<div class="col-xs-11">
		@yield('app-body')		
	</div>	

@endsection