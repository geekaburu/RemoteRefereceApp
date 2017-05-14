@extends('layouts.master')
@section('title','Home')

@section('content')

	<h3 class="text-center">Seach Customer Debt Information</h3>

	<!-- Form to search customer information -->	
	{!! Form::open(['id'=>'search','class' => 'col-xs-12']) !!}

		<div class="col-xs-12">
			<div class="radio">
	    		<label><input type="radio" name="criteria" value="national_id" checked>Search by National ID</label>				
			</div>

			<div class="radio">
				<label><input type="radio" name="criteria" value="mobile_number">Search by Mobile number</label>	
			</div>
		</div>

		<input type="text" class="form-control" name="search" placeholder="Search Customer">

		<button style="margin-top: 20px;" class="btn btn-primary" type="submit">Search</button>

	{!! Form::close() !!}

	<div class="col-xs-12 result"></div>

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