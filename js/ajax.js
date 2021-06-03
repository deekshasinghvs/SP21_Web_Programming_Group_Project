var xmlhttp;
function show_orders() {
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = show_orders_response;
	xmlhttp.open("GET","ajax/showall_orders.php",true);
	xmlhttp.send();
}
	
function show_orders_response() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		document.getElementById("maincontent").innerHTML = xmlhttp.responseText;
	}
}


function show_customers() {
	$.ajax('ajax/show_allusers_json.php', { success: show_customers_json} );
}


function show_customers_json(x,y,z) {
	var o = JSON.parse(x);
	$('#maincontent').html('<table class="table" id="custtable"><thead><tr><th>ID</th><th>Fname</th><th>Lname</th></tr></thead><tbody></tbody></table>');
	for(var i = 0; i< o.length;i++) {
		var t = '<tr><td>'+ o[i].ID+'</td><td>'+o[i].Fname+'</td><td>'+o[i].Lname+'</td></tr>';
		$('#custtable TBODY').append(t);

	}

	$.each(o,function(i,x) {
		$('#custtable TBODY').append('<tr><td>'+ x.ID+'</td><td>'+x.Fname+'</td><td>'+x.Lname+'</td></tr>');
	});
}

 


// ======================================================
// AJAX functions for selecting from the database, via POST/GET to the corresponding PHP files
// ======================================================
function show_cart(data) 
{
	var data_encoded = {'cart_select_input_query':  JSON.stringify(data)};

	// $("#select_from_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "ajax/components/selects/db_select_cart.php",
			data: data_encoded,
			success: display_show_cart_response
		   });
}

function show_books(data) 
{
	var data_encoded = {'books_select_input_query':  JSON.stringify(data)};

	// $("#select_from_books_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_books.php",
			data: data_encoded,
			success: display_show_books_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_cart_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);


	$("#select_from_cart_response").html('<table class="table" id="custtablecart"><thead><tr><th>customerID</th><th>bookId</th><th>quantity</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].customerId +'</td><td>'+ o[i].bookId+'</td><td>'+o[i].quantity+'</td></tr>';

		$('#custtablecart TBODY').append(t);

	}
}

function add_customers(data)  
{
	var data_encoded = {'customers_insert_input_query':  JSON.stringify(data)};

	// $("#add_to_customers_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_customers.php",
			data: data_encoded,
			//success: display_add_customers_response
			success:window.location.href ="../internal/registration_confirmation.php",
		   });
}

// =====================================================
// JS functions for inserting a row to the database
// =====================================================
function add_to_customers(data)
    {
        console.log("passed to add_to_customers() successfully");
        
        var email = $("#email_insert").val();
        var firstName = $("#firstName_insert_cust").val();
        var lastName = $("#lastName_insert").val();
        var phone = $("#phone_insert").val();
        var dataStoragePermission = $("#dataStoragePermission_insert").val();
        var dob = $("#dob_insert").val();
        var password = $("#passwordencrypted_insert").val();
        
		var data = {"id": id, 
					"email":email,
					"firstName": firstName,
					"lastName": lastName,
					"postalCode": 0,
					"street":"null",
					"addessLine1":"null",
					"addressLine2":"null",
					"city": "null",
					"country":"null",
					"phone":phone,
					"username":"null",
					"passwordencrypted":passwordencrypted,
					"isAdmin": 0,
					"emailVerified": 0,
					"phoneVerified": 0,
					"registrationDate": now(),
					"lastOnline": now(),
					"referralCode":"null",
					"referredBy":"null",
					"dataStoragePermission":dataStoragePermission,
					"dob": dob
	};
// Calls below function in the ajax/ajax.js file
        add_customers(data);
     }