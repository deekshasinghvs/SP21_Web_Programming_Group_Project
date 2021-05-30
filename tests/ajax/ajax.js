var xmlhttp;

// ======================================================
// AJAX functions for inserting to database, via POST/GET to the corresponding PHP files
// ======================================================

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

// ======================================================
// AJAX functions for updating in database, via POST/GET to the corresponding PHP files
// ======================================================

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
		var t = '<tr><td>'+ o[i].isbn +'</td><td>'+ o[i].title+'</td><td>'+ o[i].description+'</td><td>'+ o[i].price+'</td><td>'+o[i].categoryId+'</td><td>'+ o[i].previewLink+'</td><td>'+o[i].publicationDate+'</td><td>'+o[i].edition+'</td><td>'+ o[i].publisherId+'</td><td>'+o[i].displayImage+'</td><td>';

		$('#custtablebooks TBODY').append(t);

	}
}

function show_books(data) 
{
	var data_encoded = {'books_select_input_query':  JSON.stringify(data)};

	// $("#select_from_cart_response").append(data_encoded);
	
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
