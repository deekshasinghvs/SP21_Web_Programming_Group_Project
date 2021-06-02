var xmlhttp;

// ======================================================
// AJAX functions for inserting to database, via POST/GET to the corresponding PHP files
// ======================================================

function add_genre(data)  
{
	var data_encoded = {'genre_insert_input_query':  JSON.stringify(data)};

	// $("#add_to_orders_response").append(JSON.stringify(data));
	$("#add_to_genre_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_genre.php",
			data: data_encoded,
			success: display_add_genre_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_genre_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_genre_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}


function add_orderdetails(data)  
{
	var data_encoded = {'orderdetails_insert_input_query':  JSON.stringify(data)};

	// $("#add_to_orders_response").append(JSON.stringify(data));
	$("#add_to_orderdetails_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_orderdetails.php",
			data: data_encoded,
			success: display_add_orderdetails_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_orderdetails_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_orderdetails_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}


function add_orders(data)  
{
	var data_encoded = {'orders_insert_input_query':  JSON.stringify(data)};

	// $("#add_to_orders_response").append(JSON.stringify(data));
	$("#add_to_orders_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_orders.php",
			data: data_encoded,
			success: display_add_orders_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_orders_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_orders_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}



function add_cart(data)  
{
	var data_encoded = {'cart_insert_input_query':  JSON.stringify(data)};

	$("#add_to_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_cart.php",
			data: data_encoded,
			success: display_add_cart_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_cart_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_cart_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}

function add_category(data)  
{
	var data_encoded = {'category_insert_input_query':  JSON.stringify(data)};

	$("#add_to_category_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_category.php",
			data: data_encoded,
			success: display_add_category_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_category_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_category_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}


function add_publisher(data)  
{
	var data_encoded = {'publisher_insert_input_query':  JSON.stringify(data)};

	$("#add_to_publisher_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_publisher.php",
			data: data_encoded,
			success: display_add_publisher_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_publisher_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_publisher_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}

// function add_bookgenre(data)  
// {
// 	var data_encoded = {'bookgenre_insert_input_query':  JSON.stringify(data)};

// 	$("#add_to_bookgenre_response").append(data_encoded);
	
// 	$.ajax({
// 			type: "POST",
// 			url: "../ajax/components/inserts/db_insert_bookgenre.php",
// 			data: data_encoded,
// 			success: display_add_bookgenre_response
// 		   });
// }

// // success function - will contain HTML formatting - can be in a separate file during non-testing stages
// function display_add_bookgenre_response(x,y,z) 
// {
// 	var o = JSON.parse(x);

// 	$("#add_to_bookgenre_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
// }



function add_books(data)  
{
	var data_encoded = {'books_insert_input_query':  JSON.stringify(data)};

	$("#add_to_books_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_books.php",
			data: data_encoded,
			success: display_add_books_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_books_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_books_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}

function add_author(data)  
{
	var data_encoded = {'author_insert_input_query':  JSON.stringify(data)};

	$("#add_to_author_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/inserts/db_insert_author.php",
			data: data_encoded,
			success: display_add_author_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_add_author_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#add_to_author_response").append("<br>response code: " + o.response_code + "<br>insert id: " + o.response);
}




// ======================================================
// AJAX functions for updating in database, via POST/GET to the corresponding PHP files
// ======================================================
function update_orderdetails(data) 
{
	var data_encoded = {'orderdetails_update_input_query':  JSON.stringify(data)};

	$("#update_in_orderdetails_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_orderdetails.php",
			data: data_encoded,
			success: display_update_orderdetails_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_orderdetails_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_orderdetails_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}




function update_cart(data) 
{
	var data_encoded = {'cart_update_input_query':  JSON.stringify(data)};

	$("#update_to_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_cart.php",
			data: data_encoded,
			success: display_update_cart_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_cart_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_cart_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}

function update_orders(data) 
{
	var data_encoded = {'orders_update_input_query':  JSON.stringify(data)};

	$("#update_to_orders_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_orders.php",
			data: data_encoded,
			success: display_update_orders_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_orders_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_orders_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}


function update_category(data) 
{
	var data_encoded = {'category_update_input_query':  JSON.stringify(data)};

	$("#update_to_category_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_category.php",
			data: data_encoded,
			success: display_update_category_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_category_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_category_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}


function update_publisher(data) 
{
	var data_encoded = {'publisher_update_input_query':  JSON.stringify(data)};

	$("#update_to_publisher_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_publisher.php",
			data: data_encoded,
			success: display_update_publisher_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_publisher_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_publisher_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}

function update_genre(data) 
{
	var data_encoded = {'genre_update_input_query':  JSON.stringify(data)};

	$("#update_to_genre_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_genre.php",
			data: data_encoded,
			success: display_update_genre_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_genre_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_genre_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}





function update_books(data) 
{
	var data_encoded = {'books_update_input_query':  JSON.stringify(data)};

	$("#update_to_books_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_books.php",
			data: data_encoded,
			success: display_update_books_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_books_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_books_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
}

function update_author(data) 
{
	var data_encoded = {"author_update_input_query": JSON.stringify(data)};

	$("#update_to_author_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/updates/db_update_author.php",
			data: data_encoded,
			success: display_update_author_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_update_author_response(x,y,z) 
{
	var o = JSON.parse(x);

	$("#update_in_author_response").append("<br>response code: " + o.response_code + "<br>update id: " + o.response);
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
			url: "../ajax/components/selects/db_select_cart.php",
			data: data_encoded,
			success: display_show_cart_response
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


function show_category(data) 
{
	var data_encoded = {'category_select_input_query':  JSON.stringify(data)};

	// $("#select_from_category_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_category.php",
			data: data_encoded,
			success: display_show_category_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_category_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);
	
	$("#select_from_category_response").html('<table class="table" id="custtablecategory"><thead><tr><th>ID</th><th>Name</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].id +'</td><td>'+ o[i].name+'</td><td>';

		$('#custtablecategory TBODY').append(t);

	}
}

function show_publisher(data) 
{
	var data_encoded = {'publisher_select_input_query':  JSON.stringify(data)};

	// $("#select_from_publisher_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_publisher.php",
			data: data_encoded,
			success: display_show_publisher_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_publisher_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);
	
	$("#select_from_publisher_response").html('<table class="table" id="custtablepublisher"><thead><tr><th>ID</th><th>Type</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].id +'</td><td>'+ o[i].type+'</td><td>';

		$('#custtablepublisher TBODY').append(t);

	}
}



function show_genre(data) 
{
	var data_encoded = {'genre_select_input_query':  JSON.stringify(data)};

	// $("#select_from_publisher_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_genre.php",
			data: data_encoded,
			success: display_show_genre_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_genre_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);
	
	$("#select_from_genre_response").html('<table class="table" id="custtablegenre"><thead><tr><th>ID</th><th>Type</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].id +'</td><td>'+ o[i].type+'</td><td>';

		$('#custtablegenre TBODY').append(t);

	}
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
function display_show_books_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);

	$("#select_from_books_response").html('<table class="table" id="custtablebooks"><thead><tr><th>isbn</th><th>title</th><th>description</th><th>price</th><th>categoryId</th><th>previewLink</th><th>publicationDate</th><th>edition</th><th>publisherId</th><th>displayImage</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].isbn+'</td><td>'+ o[i].title+'</td><td>'+o[i].description+'</td><td>'+o[i].price+'</td><td>'+o[i].categoryId+'</td><td>'+o[i].previewLink+'</td><td>'+o[i].publicationDate+'</td><td>'+o[i].edition+'</td><td>'+o[i].publisherId+'</td><td>'+o[i].displayImage+'</td></tr>';

		$('#custtablebooks TBODY').append(t);

	}
}
function show_bookpreview(data) 
{
	var data_encoded = {'bookpreview_select_input_query':  JSON.stringify(data)};

	$("#select_from_bookpreview_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_bookpreview.php",
			data: data_encoded,
			success: display_show_bookpreview_response
		   });
}
// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_bookpreview_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);

	// $("#select_from_bookpreview_response").append(o[0].isbn.toString());
	
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

	$("#select_from_bookpreview_response").append(html_table);

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




function show_author(data) 
{
	var data_encoded = {'author_select_input_query':  JSON.stringify(data)};

	// $("#select_from_author_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_author.php",
			data: data_encoded,
			success: display_show_author_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_author_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);
	
	$("#select_from_author_response").html('<table class="table" id="custtableauthor"><thead><tr><th>id</th><th>firstName</th><th>secondName</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].id +'</td><td>'+ o[i].firstName+'</td><td>'+o[i].secondName+'</td><td>';

		$('#custtableauthor TBODY').append(t);

	}
}


function show_orderdetails(data) 
{
	var data_encoded = {'orderdetails_select_input_query':  JSON.stringify(data)};

	// $("#select_from_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_orderdetails.php",
			data: data_encoded,
			success: display_show_orderdetails_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_orderdetails_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);

	$("#select_from_orderdetails_response").html('<table class="table" id="custtableorderdetails"><thead><tr><th>orderId</th><th>bookId</th><th>quantity</th></tr></thead><tbody></tbody></table>');
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].orderId +'</td><td>'+ o[i].bookId+'</td><td>'+o[i].quantity+'</td></tr>';

		$('#custtableorderdetails TBODY').append(t);

	}
}


function show_orders(data) 
{
	var data_encoded = {'orders_select_input_query':  JSON.stringify(data)};

	// $("#select_from_cart_response").append(data_encoded);
	
	$.ajax({
			type: "POST",
			url: "../ajax/components/selects/db_select_orders.php",
			data: data_encoded,
			success: display_show_orders_response
		   });
}

// success function - will contain HTML formatting - can be in a separate file during non-testing stages
function display_show_orders_response(x,y,z) 
{
	var o = JSON.parse(JSON.parse(x).response);

	$("#select_from_orders_response").html('<table class="table" id="custtableorders"><thead><tr><th>id</th><th>customerId</th><th>orderDate</th><th>status</th><th>extraDetails</th><th>promoCode</th><th>paymentMethod</th><th>totalPrice</th><th>discount</th><th>finalPrice</th><th>currency</th></tr></thead><tbody></tbody></table>');	
	
	for(var i = 0; i < o.length; i++) 
	{
		var t = '<tr><td>'+ o[i].id+'</td><td>'+ o[i].customerId+'</td><td>'+o[i].orderDate+'</td><td>'+o[i].status+'</td><td>'+o[i].extraDetails+'</td><td>'+o[i].promoCode+'</td><td>'+o[i].paymentMethod+'</td><td>'+o[i].totalPrice+'</td><td>'+o[i].discount+'</td><td>'+o[i].finalPrice+'</td><td>'+o[i].currency+'</td></tr>';
		$('#custtableorders TBODY').append(t);

	}
}
