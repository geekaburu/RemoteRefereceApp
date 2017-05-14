@extends('layouts.master')
@section('title','Home')

@section('content')

	<h3 class="text-center">Customer Debt Information</h3>

	<table id="debt-table" class="table table-striped" cellspacing="0" width="100%">

        <thead>
            <tr>
                <th>Customer</th>
                <th>Transaction Date</th>
                <th>Transaction amount</th>
                <th>Due Days</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>

            </tr>
            <tr>
                <td>Garrett</td>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>

            </tr>
            <tr>
                <td>Ashton</td>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
            </tr>
            <tr>
                <td>Cedric</td>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>

            </tr>
            <tr>
                <td>Airi</td>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>

            </tr>
        </tbody>
	</table>

@endsection

@section('customScripts')
	 
	 <script>
	 	
	 	$(document).ready(function() {
		    $('#debt-table').DataTable( {
		        "scrollX": true
		    } );
		} );

	 </script>

@endsection