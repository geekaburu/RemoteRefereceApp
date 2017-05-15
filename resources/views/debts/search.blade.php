@extends('layouts.app')
@section('title','Home')

@section('app-body')

	<h3 style="margin-top: 60px;" class="header text-center">Seach Customer Debt Information</h3>

	<!-- Form to search customer information -->	
	{!! Form::open(['id'=>'search','class' => 'col-xs-12 col-sm-6 col-sm-offset-3']) !!}

		<div style="margin-bottom: 30px;" class="text-center col-xs-12">
			<div class="radio">
	    		<label><input type="radio" name="criteria" value="national_id" checked>Search by National ID</label>				
			</div>

			<div class="radio">
				<label><input type="radio" name="criteria" value="mobile_number">Search by Mobile number</label>	
			</div>
		</div>

		<input type="text" class="form-control" name="search" placeholder="Search Customer" required="">
		
		<div class="col-xs-12 text-center">	
			<button style="margin-top: 20px;" class="text-center btn btn-primary" type="submit">Search Customer</button>
		</div>

	{!! Form::close() !!}

	<div class="col-xs-12 col-sm-10 col-sm-offset-1 result well">
		
		<h3 style="margin-top: 20%;" class="text-center">Your result will be shown here</h3>

	</div>

@endsection

@section('CustomScripts')

	<script>

		$(document).ready(function(){

			$('#search').on('submit', function(){

				// Define data to be sent over the ajax request
				var data = {
					'_token':'{{csrf_token()}}',
					'search': $('#search input[name=search]').val(),
					'criteria': $('#search input[name=criteria]:checked').val()
				};

				// Post the data via an ajax post request
				ajaxRequest('{{ route('profiles.search') }}','post',data,'Customer');
				return false;
			});
		});

	</script>

@endsection