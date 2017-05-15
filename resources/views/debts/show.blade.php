@extends('layouts.app')
@section('title','Home')

@section('app-body')

	<h3 style="margin-top: 60px;" class="header text-center">Customer Debt Information</h3>

    <div style="margin-top: 30px; margin-bottom: 30px;" class="col-xs-12 text-center">
        <a href="{{ route('debts.download') }}" class="btn btn-primary">Click to Download</a>        
    </div>

    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

    	<table id="debt-due" class="table table-striped table-bordered" cellspacing="0" width="100%">

            <thead>
                <tr>
                    <th>Transaction Date</th>
                    <th>Customer</th>
                    <th>Transaction amount</th>
                    <th>Due Days</th>

                </tr>
            </thead>
            <tbody>
                @foreach($debts as $debt)
                    <tr>
                        <td>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$debt->transaction_date)->format('Y-m-d')}}</td>
                        <td>{{$debt->profile->name}}</td>
                        <td>{{number_format((float)$debt->transaction_amount, 2, '.', '')}}</td>
                        <td>{{$debt->transaction_days}}</td>
                    </tr>
                @endforeach
            </tbody>
    	</table>

    </div>

@endsection

@section('CustomScripts')
	 
	 <script>
	 	
	 	$(document).ready(function() {
		    $('#debt-due').DataTable({
                "scrollX": true
            });
		});

	 </script>

@endsection