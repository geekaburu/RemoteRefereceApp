@extends('layouts.app')
@section('title','Home')

@section('app-body')

	<h1 class="text-center" style="font-weight: 500; margin-top: 10%;">Debt Remote Reference App</h1>
	<p class="text-center">Look up your customers' debt status remotely</p>

	<h3 class="text-center" style="font-weight: 500; margin-top: 5%;">What would you like to do?</h3>

	<div style="margin-top: 60px;" class="text-center col-xs-8 col-xs-offset-2">
		<a class="btn btn-primary" href="{{ route('app.debt.search') }}">Search Customer Information</a>
		<a class="btn btn-primary" href="{{ route('debts.index') }}">Download Debt Information</a>
	</div>	

@endsection