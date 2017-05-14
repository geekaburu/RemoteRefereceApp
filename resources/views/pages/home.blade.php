@extends('layouts.app')
@section('title','Home')

@section('app-body')
	
	<h2 style="margin: 50px; font-weight: 700;" class="text-center">Debt Remote Reference App</h2>

	<div class="text-center col-xs-6">

		<a href="{{ route('app.debt.search') }}">
			<i class="fa-5x fa fa-search" aria-hidden="true"></i>
			<p style="font-weight: 700; font-size: 13pt; margin-top: 15px;">Search Customer Debt Information</p>
		</a>	

	</div>	

	<div class="text-center col-xs-6">

		<a href="{{ route('debts.index') }}">
			<i class="fa-5x fa fa-download" aria-hidden="true"></i>
			<p style="font-weight: 700; font-size: 13pt; margin-top: 15px;">Download Customer Debt Information</p>
		</a>	

	</div>	

@endsection