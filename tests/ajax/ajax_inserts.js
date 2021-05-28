var xmlhttp;
function add_cart(data) 
{
	var data_encoded = {'cart_insert_input_query':  JSON.stringify(data)};

	$("#add_to_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_cart.php",
			data: data_encoded,
			success: show_cart_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function show_cart_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_cart_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}

