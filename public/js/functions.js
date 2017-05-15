// Adjust height of application sections
var adjustHeight = function(){
	$('.main-bar').css('min-height',$(window).height());
	$('.side-bar').height($('.main-bar').height());
}

// Display errors on screen
var displayErrors = function(data){
	var errorText = '';
	for (x in data){
		errorText += data[x][0]+'<br>';
	}
	return errorText;
}

// Display query results
var displayResult = function(response,elements){
	elements = elements || 0;
	if(elements){
		customer = '<h3 style="margin-top:30px; margin-bottom:30px;" class="header">Basic Information</h3><table class="table table-striped"><tbody><tr><td>Name</td><td class="text-right">'+response.customer['name']+'</td></tr><tr><td>Email</td><td class="text-right">'+response.customer['email']+'</td></tr><tr><td>National ID Number</td><td class="text-right">'+response.customer['national_id']+'</td></tr><tr><td>Mobile Number</td><td class="text-right">'+response.customer['mobile_number']+'</td></tr><tr><td>City</td><td class="text-right">'+response.customer['city']+'</td></tr><tr><td>Country</td><td class="text-right">'+response.customer['country']+'</td></tr><tr><td>Customer since</td><td class="text-right">'+response.customer['created_at']+'</td></tr></tbody></table>';

		debts = '<h3 style="margin-top:30px; margin-bottom:30px;" class="header">Debt Information</h3><table class="table table-striped"><thead><tr><th>Date</th><th>Transaction ID</th><th>Amount</th><th>Duration</th></tr></thead><tbody>';

		for(x in response.debts){
			debts += '<tr><td>'+response.debts[x].transaction_date+'</td><td>'+response.debts[x].transaction_id+'</td><td>'+response.debts[x].transaction_amount+'<td>'+response.debts[x].transaction_days+' days</td></tr>';
		}

		debts += '</tbody></table>'
		response = customer + debts;	
	} else
		response = '<h3 style="margin-top: 15%; color:red;" class="text-center">'+response+'</h3>';

	$('.result').html(response);
}

var ajaxRequest = function(route,method,data,user){

	// Taking in values of all database entries and posting them to a server side script
	$.ajax({
		url: route,
	    method: method,
	    data: data,
		success:function(data){
			if(data.errors)
				displayResult(displayErrors(data.errors));	
			else{
				if(data.customer)
					displayResult(data,1);	
				else
					displayResult(user +' not found.');
			}

		}
    });
}