@extends('layouts.master')
@section('title','Home')

@section('content')

	<h3 class="text-center">Welcome to your debt checker</h3>
	<p class="text-center"><a class="btn btn-primary" href="{{ route('app.search') }}">Look up customer debt information</a></p>	
	<p class="text-center"><a class="btn btn-primary" href="#">Download debtors information</a></p>	

@endsection