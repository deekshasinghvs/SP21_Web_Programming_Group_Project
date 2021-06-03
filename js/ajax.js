var xmlhttp;
// function show_orders() {
// 	xmlhttp = new XMLHttpRequest();
// 	xmlhttp.onreadystatechange = show_orders_response;
// 	xmlhttp.open("GET","ajax/showall_orders.php",true);
// 	xmlhttp.send();
// }
	
// function show_orders_response() {
// 	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
// 		document.getElementById("maincontent").innerHTML = xmlhttp.responseText;
// 	}
// }


// function show_customers() {
// 	$.ajax('ajax/show_allusers_json.php', { success: show_customers_json} );
// }


// function show_customers_json(x,y,z) {
// 	var o = JSON.parse(x);
// 	$('#maincontent').html('<table class="table" id="custtable"><thead><tr><th>ID</th><th>Fname</th><th>Lname</th></tr></thead><tbody></tbody></table>');
// 	for(var i = 0; i< o.length;i++) {
// 		var t = '<tr><td>'+ o[i].ID+'</td><td>'+o[i].Fname+'</td><td>'+o[i].Lname+'</td></tr>';
// 		$('#custtable TBODY').append(t);

// 	}

// 	$.each(o,function(i,x) {
// 		$('#custtable TBODY').append('<tr><td>'+ x.ID+'</td><td>'+x.Fname+'</td><td>'+x.Lname+'</td></tr>');
// 	});
// }

 


// ======================================================
// AJAX functions for selecting from the database, via POST/GET to the corresponding PHP files
// ======================================================
// function show_cart(data) 
// {
// 	var data_encoded = {'cart_select_input_query':  JSON.stringify(data)};

// 	// $("#select_from_cart_response").append(data_encoded);
	
// 	$.ajax({
// 			type: "POST",
// 			url: "ajax/components/selects/db_select_cart.php",
// 			data: data_encoded,
// 			success: display_show_cart_response
// 		   });
// }

// function show_books(data) 
// {
// 	var data_encoded = {'books_select_input_query':  JSON.stringify(data)};

// 	// $("#select_from_books_response").append(data_encoded);
	
// 	$.ajax({
// 			type: "POST",
// 			url: "../ajax/components/selects/db_select_books.php",
// 			data: data_encoded,
// 			success: display_show_books_response
// 		   });
// }

// // success function - will contain HTML formatting - can be in a separate file during non-testing stages
// function display_show_cart_response(x,y,z) 
// {
// 	var o = JSON.parse(JSON.parse(x).response);


// 	$("#select_from_cart_response").html('<table class="table" id="custtablecart"><thead><tr><th>customerID</th><th>bookId</th><th>quantity</th></tr></thead><tbody></tbody></table>');
	
// 	for(var i = 0; i < o.length; i++) 
// 	{
// 		var t = '<tr><td>'+ o[i].customerId +'</td><td>'+ o[i].bookId+'</td><td>'+o[i].quantity+'</td></tr>';

// 		$('#custtablecart TBODY').append(t);

// 	}
// }

function search_bookpreview(data) 
{
	var data_encoded = {'bookpreview_select_input_query':  JSON.stringify(data)};
	
	$.ajax({
			type: "POST",
			url: "ajax/specialized_components/db_select_bookpreview_by_search.php",
			data: data_encoded,
			success: display_search_bookpreview_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_search_bookpreview_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);

	var json = o[0];
	var keys = [];

	html_table = "<table class=\"table\" id=\"custtablebookpreview\"><thead><tr>";
	
	keys = Object.keys(json);
	
	for(k in keys) 
	{
		// keys.append(k.toString());
		html_table += ("<th>" + keys[k].toString() + "</th>");
	}
	html_table += "</tr></thead><tbody></tbody></table>";

	$("#response").html(html_table);

	for(var i = 0; i < o.length; i++) 
	{
		var t = "<tr>";

		for (k in keys)
		{
			t += ('<td>'+ (o[i])[keys[k]] +'</td><td>');
		}
		t += "</tr>"

		$('#custtablebookpreview TBODY').append(t);
	}
}
