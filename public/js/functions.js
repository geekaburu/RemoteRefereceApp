// Adjust height of application sections
var adjustHeight = function(){
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
		customer = '<h3 style="margin-top:30px; margin-bottom:30px;" class="header">Basic Information</h3><table class="table table-striped"><tbody><tr><td>Id</td><td class="text-right">'+response['id']+'</td></tr><tr><td>National ID Number</td><td class="text-right">'+response['national_id']+'</td></tr><tr><td>Mobile Number</td><td class="text-right">'+response['mobile_number']+'</td></tr><tr><td>Clearance Status</td><td class="text-right">'+response['fully_cleared']+'</td></tr><tr><td>Clearance Date</td><td class="text-right">'+response['date_cleared']+'</td></tr><tr><td>Batch Numbers</td><td class="text-right">'+response['batch_numbers']+'</td></tr><tr><td>Mpesa Clearance Id</td><td class="text-right">'+response['clearing_mpesa_trans_id']+'</td></tr></tbody></table>';

		response = customer;	
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
				if(data)
					displayResult(data, 1);	
				else
					displayResult(user +' not found.');
			}

		}
    });
}