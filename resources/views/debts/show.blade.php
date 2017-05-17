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
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Customer Account No</th>
                    <th>Customer Number</th>
                    <th>Loan Amount</th>
                    <th>Balance</th>
                    <th>Issue Date</th>
                    <th>Due Date</th>

                </tr>
            </thead>
            <tbody>
                @foreach($debts as $debt)
                    <tr>
                        <td>{{$debt->cust_id}}</td>
                        <td>{{$debt->cust_name}}</td>
                        <td>{{$debt->cust_acno}}</td>
                        <td>(+254) {{$debt->cust_mobile_number}}</td>
                        <td>{{number_format($debt->loan_amount,2)}}</td>
                        <td>{{number_format($debt->loan_balance,2)}}</td>
                        <td>{{\Carbon\Carbon::parse($debt->loan_issue_date)->format('d-m-y')}}</td>
                        <td>{{\Carbon\Carbon::parse($debt->loan_due_date)->format('d-m-y')}}</td>
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