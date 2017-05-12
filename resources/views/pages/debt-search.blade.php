@extends('layouts.master')
@section('title','Home')

@section('content')

	<h3 class="text-center">Customer Information</h3>

	<!-- Form to search customer information -->	
	{!! Form::open(['url' => '#', 'class'=>'col-xs-12']) !!}

		<input type="text" class="form-control" name="search" placeholder="Search Customer" required>

	{!! Form::close() !!}

@endsection