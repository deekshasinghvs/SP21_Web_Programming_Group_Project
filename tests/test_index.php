<!doctype html>
<html lang="en">
<?php
session_start();

require_once "../internal/dbconnect.php";
include "../debug/chromephp-master/ChromePhp.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Bookstore - Testing</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">

    <!-- Add ajax files -->
    <script src="ajax/ajax.js"></script>
    <script>
// =====================================================
// JS functions for inserting a row to the database
// ===================================================== 
function add_to_orderdetails(orderId, bookId)
    {
        var quantity_id = bookId.substring(0,14) + "_quantity_insert";           
        var quantity = parseInt($("#" + quantity_id).val());
                                
        var data = {"orderId": orderId, 
                    "bookId": bookId,
                    "quantity": quantity
                    };
        // Calls below function in the ajax/ajax.js file
        add_orderdetails(data); 
    }


    function add_to_orders(customerId)
    {
        var orderDate_id = "orderDate_insert";
        var orderDate = $("#" + orderDate_id).val();
        var status_id = "status_insert";
        var status = $("#" + status_id).val();
        var extraDetails_id = "extraDetails_insert";
        var extraDetails = $("#" + extraDetails_id).val();
        var promoCode_id = "promoCode_insert";
        var promoCode = $("#" + promoCode_id).val();
        var paymentMethod_id = "paymentMethod_insert";
        var paymentMethod = $("#" + paymentMethod_id).val();
        var totalPrice_id = "totalPrice_insert";
        var totalPrice = $("#" + totalPrice_id).val();
        var discount_id = "discount_insert";
        var discount = $("#" + discount_id).val();
        var finalPrice_id = "finalPrice_insert";
        var finalPrice = $("#" + finalPrice_id).val();
        var currency_id = "currency_insert";
        var currency = $("#" + currency_id).val();
        
        var data = {"customerId": customerId,
                    "orderDate": orderDate, 
                    "status": status,
                    "extraDetails": extraDetails,
                    "promoCode": promoCode,
                    "paymentMethod":paymentMethod,
                    "totalPrice": totalPrice,
                    "discount": discount,
                    "finalPrice": finalPrice,  
                    "currency": currency
                    };

        // Calls below function in the ajax/ajax.js file
        add_orders(data); 
    }

    
    
    function add_to_cart(customerid, bookid)
    {
        var quantity_id = bookid.substring(0,14) + "_quantity_insert";           
        var quantity = parseInt($("#" + quantity_id).val());
                                
        var data = {"customerid": customerid, 
                    "bookid": bookid,
                    "quantity": quantity
                    };

        // Calls below function in the ajax/ajax.js file
        add_cart(data); 
    }


    function add_to_category()
    {
        var category_id = "category_insert";           
        var category = $("#" + category_id).val();
                                
        var data = {"name": category};

        // Calls below function in the ajax/ajax.js file
        add_category(data); 
    }

    function add_to_publisher()
    {
        var type = $("#publisher_insert").val();
                                
        var data = {"type": type};

        // Calls below function in the ajax/ajax.js file
        add_publisher(data); 
    }



    function add_to_genre()
    {
        var type = $("#genre_insert").val();
                                
        var data = {"type": type};

        // Calls below function in the ajax/ajax.js file
        add_genre(data); 
    }


    function add_to_books()
    {
        var isbn_id = "isbn_insert";
        var isbn = $("#"+ isbn_id).val();
        var title_id = "title_insert";
        var title = $("#"+title_id).val();
        var description_id = "description_insert";
        var description = $("#"+ description_id).val();
        var price_id = "price_insert";
        var price = $("#"+ price_id).val();
        var category_Id = "categoryId_insert";
        var categoryId = $("#"+ category_Id).val();
        var previewLink_id = "previewLink_insert";
        var previewLink = $("#"+ previewLink_id).val();
        var publicationDate_id = "publicationDate_insert";
        var publicationDate = $("#"+ publicationDate_id).val();
        var edition_id = "edition_insert";
        var edition = $("#"+ edition_id).val();
        var publisher_Id = "publisherId_insert";
        var publisherId = $("#"+ publisher_Id).val();
        var displayImage_id = "displayImage_insert";
        var displayImage = $("#"+displayImage_id).val();
        
                                
        var data = {"isbn": isbn, 
                    "title": title,
                    "description": description,
                    "price": price,
                    "categoryId":categoryId,
                    "previewLink": previewLink,
                    "publicationDate": publicationDate,
                    "edition": edition,
                    "publisherId": publisherId,
                    "displayImage": displayImage
                    };
        // Calls below function in the ajax/ajax.js file
        add_books(data);
     }

     function add_to_author()
    {
        var firstName = $("#firstName_insert").val();
        var secondName = $("#secondName_insert").val();

        var data = {"firstName": firstName,
                    "secondName": secondName};
                        
        // Calls below function in the ajax/ajax.js file
        add_author(data); 
    }
    function add_to_bookauthors(bookId, authorId)
    {
                                
        var data = {"bookId": bookId, 
                    "authorId": authorId
                    };

        // Calls below function in the ajax/ajax.js file
        add_bookauthors(data); 
    }

    function add_to_customers()
    {
        var id = $("#id_insert").val();
        var email = $("#email_insert").val();
        var firstName = $("#firstName_insert_cust").val();
        var lastName = $("#lastName_insert").val();
        var postalCode = $("#postalCode_insert").val();
        var street = $("#street_insert").val();
        var addessLine1 = $("#addessLine1_insert").val();
        var addressLine2 = $("#addressLine2_insert").val();
        var city = $("#city_insert").val();
        var country = $("#country_insert").val();
        var phone = $("#phone_insert").val();
        var username = $("#userName_insert").val();
        var passwordencrypted = $("#passwordencrypted_insert").val();
        var isAdmin = $("#isAdmin_insert").val();
        var emailVerified = $("#emailVerified_insert").val();
        var phoneVerified = $("#phoneVerified_insert").val();
        var registrationDate = $("#registrationDate_insert").val();
        var lastOnline = $("#lastOnline_insert").val();
        var referralCode = $("#referralCode_insert").val();
        var referredBy = $("#referredBy_insert").val();
        var dataStoragePermission = $("#dataStoragePermission_insert").val();
        var dob = $("#dob_insert").val();
        
             var data = {"id": id, 
                        "email":email,
                        "firstName": firstName,
                        "lastName": lastName,
                        "postalCode":postalCode,
                        "street":street,
                        "addessLine1":addessLine1,
                        "addressLine2":addressLine2,
                        "city": city,
                        "country":country,
                        "phone":phone,
                        "username":username,
                        "passwordencrypted":passwordencrypted,
                        "isAdmin":isAdmin,
                        "emailVerified":emailVerified,
                        "phoneVerified":phoneVerified,
                        "registrationDate":registrationDate,
                        "lastOnline":lastOnline,
                        "referralCode":referralCode,
                        "referredBy":referredBy,
                        "dataStoragePermission":dataStoragePermission,
                        "dob":dob
                    };
        // Calls below function in the ajax/ajax.js file
        add_customers(data);
     }
  
// ======================================================
// JS functions for updating a row in the databse 
// =======================================================
function update_in_orderdetails(orderId, bookId)
    {
        var quantity_id = bookId.substring(0,14) + "_quantity_update_orderdetails";           
        var quantity = parseInt($("#" + quantity_id).val());
        var data = {"orderId": orderId, 
                    "bookId": bookId,
                    "quantity": quantity
                    };
        // Calls below function in the ajax/ajax.js file 
        update_orderdetails(data); 
    }


    function update_in_cart(customerid, bookid)
    {
        var quantity_id = bookid.substring(0,14) + "_quantity_update";           
        var quantity = parseInt($("#" + quantity_id).val());
                                
        var data = {"customerid": customerid, 
                    "bookid": bookid,
                    "quantity": quantity
                    };
        // Calls below function in the ajax/ajax.js file 
        update_cart(data); 
    }

    function update_in_category(id)
    {
        var name = $("#category_name_update").val();
                                
        var data = {"id": parseInt(id), 
                    "name": name
                    };
        // Calls below function in the ajax/ajax.js file 
        update_category(data); 
    }


    function update_in_publisher(id)
    {
        var type = $("#publisher_type_update").val();
                                
        var data = {"id": parseInt(id), 
                    "type": type
                    };

        // Calls below function in the ajax/ajax.js file 
        update_publisher(data); 
    }

    function update_in_genre(id)
    {
        var type = $("#genre_type_update").val();
                                
        var data = {"id": parseInt(id), 
                    "type": type
                    };

        // Calls below function in the ajax/ajax.js file 
        update_genre(data); 
    }


    function update_in_books(isbn_json, publisherId)
    {
        var title = $("#title_updated").val();
        var description = $("#decription_updated").val();
        var price = $("#price_updated").val();
        var categoryId = $("#category_updated").val();
        var previewLink = $("#previewLink_updated").val();
        var publicationDate = $("#publicationDate_updated").val();
        var edition = $("#edition_updated").val();
        var displayImage = $("#displayImage_updated").val();
                                
        var data = {"isbn": isbn_json, 
                    "title": title,
                    "description": description,
                    "price": parseFloat (price),
                    "categoryId":parseInt(categoryId),
                    "previewLink": previewLink,
                    "publicationDate": publicationDate,
                    "edition": parseInt(edition),
                    "publisherId": parseInt(publisherId),
                    "displayImage": displayImage
                    };
        // Calls below function in the ajax/ajax.js file 
        update_books(data); 
    }

    function update_in_orders(customerId, id)
    {  
        // var id = parseInt("6");
        var status = $("#status_updated").val();
        var extraDetails = $("#extraDetails_updated").val();
        var promoCode = $("#promoCode_updated").val();
        var paymentMethod = $("#paymentMethod_updated").val();
        var totalPrice = parseFloat($("#totalPrice_updated").val());
        var discount = parseFloat($("#discount_updated").val());
        var finalPrice = parseFloat($("#finalPrice_updated").val());
        var currency = $("#currency_updated").val();
                                
        var data = {"customerId": customerId, 
                    "status": status,
                    "extraDetails": extraDetails,
                    "promoCode":promoCode,
                    "paymentMethod": paymentMethod,
                    "totalPrice": totalPrice,
                    "discount": discount,
                    "finalPrice": finalPrice,
                    "currency": currency,
                    "id": id
                    };
        // Calls below function in the ajax/ajax.js file 
        update_orders(data); 
    }

     function update_in_author(id)
    {
        var firstName = $("#first_name_update").val();
        var secondName = $("#second_name_update").val();
                                
        var data = {"id": parseInt(id),
                    "firstName": firstName,
                    "secondName": secondName
                    };
        // Calls below function in the ajax/ajax.js file 
        update_author(data); 
    }

    function update_in_customers(id)
    {
        var email = $("#email_update").val();
        var firstName = $("#firstName_update_cust").val();
        var lastName = $("#lastName_update").val();
        var postalCode = $("#postalCode_update").val();
        var street = $("#street_update").val();
        var addessLine1 = $("#addessLine1_update").val();
        var addressLine2 = $("#addressLine2_update").val();
        var city = $("#city_update").val();
        var country = $("#country_update").val();
        var phone = $("#phone_update").val();
        var username = $("#userName_update").val();
        var passwordencrypted = $("#passwordencrypted_update").val();
        var isAdmin = $("#isAdmin_update").val();
        var emailVerified = $("#emailVerified_update").val();
        var phoneVerified = $("#phoneVerified_update").val();
        //var registrationDate = $("#registrationDate_update").val();
        var lastOnline = $("#lastOnline_update").val();
        var referralCode = $("#referralCode_update").val();
        var referredBy = $("#referredBy_update").val();
        var dataStoragePermission = $("#dataStoragePermission_update").val();
        var dob = $("#dob_update").val();
        
            var data = {"id": parseInt(id), 
                        "email":email,
                        "firstName": firstName,
                        "lastName": lastName,
                        "postalCode":parseInt(postalCode),
                        "street":street,
                        "addessLine1":addessLine1,
                        "addressLine2":addressLine2,
                        "city": city,
                        "country":country,
                        "phone":phone,
                        "username":username,
                        "passwordencrypted":passwordencrypted,
                        "isAdmin":parseInt(isAdmin),
                        "emailVerified":parseInt(emailVerified),
                        "phoneVerified":parseInt(phoneVerified),
                        //"registrationDate":registrationDate,
                        "lastOnline":lastOnline,
                        "referralCode":referralCode,
                        "referredBy":referredBy,
                        "dataStoragePermission":parseInt(dataStoragePermission),
                        "dob":dob
                    };
        // Calls below function in the ajax/ajax.js file
        update_customers(data);
    }

// ======================================================
// JS functions for selecting rows from the database 
// =======================================================
function select_from_orderdetails(orderId)
        {                        
            var data = {"orderId": orderId};

            // Calls below function in the ajax/ajax.js file 
            show_orderdetails(data); 
        }

        function select_from_orders(customerId)
        {                        
            var data = {"customerId": customerId};

            // Calls below function in the ajax/ajax.js file 
            show_orders(data); 
        }

    
    function select_from_cart(customerid)
        {                        
            var data = {"customerid": customerid};

            // Calls below function in the ajax/ajax.js file 
            show_cart(data); 
        }

    function select_from_category(id)
        {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_category(data); 
        }

    function select_from_publisher(id)
        {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_publisher(data); 
        }

        
        function select_from_genre(id)
        {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_genre(data); 
        }

        
    function select_from_books(isbn_json)
        {                        
            var data = {"isbn": isbn_json};

            // Calls below function in the ajax/ajax.js file 
            show_books(data); 
        }
    function select_from_author(id)
        {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_author(data);
        }
    function select_from_bookpreview(id, queryBy)
        {                        
            var key = queryBy
            var data = {"queryBy": queryBy.toString()}; 
            
            if(key != "isbn")
            {
                data[key] = parseInt(id);
            }
            else
            {
                data[key] = id;
            }

            // Calls below function in the ajax/ajax.js file 
            show_bookpreview(data);
        }

    function select_from_bookauthors( input_value, queryFor, input_key)
        {                        
            var data = {"queryFor": queryFor}
            data[input_key] = input_value;

            // Calls below function in the ajax/ajax.js file 
            show_bookauthors(data); 
        }

    function search_select_from_bookpreview()
    {
        var query = $("#bookpreview_search_select").val();
        var data = {"query": query,
                    "orderBy" : $("#bookpreview_search_select_orderBy").val(),
                    "limit": parseInt($("#bookpreview_search_select_limit").val()),
                    "offset": parseInt($("#bookpreview_search_select_offset").val())
        };

        // Calls below function in the ajax/ajax.js file 
        search_bookpreview(data); 
    }

    function select_from_customers(id)
    {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_customers(data);
    }


    </script>
  </head>
<body>
    <h1>Testing - Insert</h1>

    <!-- ==== Testing component inserts ==== 
    ======================================== --> 
    <?php
    print "<h1>Insert To Database Tables</h1>";
    echo "<h2>Table: Cart</h2>";
    
    // uncomment below only when applicable - for admin panel testing
        //   <h3>Via Form</h3>
        //   <form action=\"ajax/add_product.php\" method=\"post\">
        //         Title: <input type=\"text\" name=\"title\"><br>
        //         Description: <input type=\"text\" name=\"description\"><br>
        //         Price: <input type=\"number\" name=\"price\" step=\".01\"><br>
        //         <input type=\"hidden\" name=\"categoryid\" value=\"$cat\"><br>
        //         <input type=\"submit\">
        //   </form>

    $bookid = "1234567891012";
    $bookid_json = "'1234567891012'";
    $customerid = "1";
    
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing bookid = $bookid</p>
            <p>Existing customerid = $customerid</p>
            <form>
        	    Quantity: <input type=\"number\" name=\"quantity\" id=\"${bookid}_quantity_insert\" value=\"1\"><br>
            </form>
            <button onclick=\"add_to_cart($customerid , $bookid_json )\">Submit</button>";
    
    echo "<p id=\"add_to_cart_response\"></p>";

    echo "<h2>Table: Category</h2>";
    
    print "<form>
        	    New Category Name: <input type=\"text\" name=\"category_name\" id=\"category_insert\"><br>
            </form>
            <button onclick=\"add_to_category()\">Submit</button>";
    
    echo "<p id=\"add_to_category_response\"></p>";

    echo "<h2>Table: Publisher</h2>";
    
    print "<form>
        	    New Publisher Type: <input type=\"text\" name=\"publisher_type\" id=\"publisher_insert\"><br>
            </form>
            <button onclick=\"add_to_publisher()\">Submit</button>";
    
    echo "<p id=\"add_to_publisher_response\"></p>";


    echo "<h2>Table: Genre</h2>";
    
    print "<form>
        	    New genre Type: <input type=\"text\" name=\"genre_type\" id=\"genre_insert\"><br>
            </form>
            <button onclick=\"add_to_genre()\">Submit</button>";
    
    echo "<p id=\"add_to_genre_response\"></p>";


    echo "<h2>Table: Books</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Book_ISBN</label>
             <input type=\"text\" name=\"isbn\" id=\"isbn_insert\"><br>
             <label>Book_Title</label>
             <input type=\"text\" name=\"title\" id=\"title_insert\"><br>
             <label>Book_Description</label>
             <input type=\"text\" name=\"description\" id= \"description_insert\"><br>
             <label>Book_Price</label>
             <input type=\"number\" name=\"price\" step=\".01\" id=\"price_insert\"><br>
             <label>Book_Category</label>
             <input type=\"text\" name=\"categoryId\" id=\"categoryId_insert\"><br>
             <label>Book_Preview</label>
             <input type=\"text\" name=\"previewLink\" id=\"previewLink_insert\"><br>
             <label>Book_Publication_Date</label>
             <input type=\"date\" name=\"publicationDate\" id=\"publicationDate_insert\"><br>
             <label>Book_Edition</label>
             <input type=\"number\" name=\"edition\" id=\"edition_insert\"><br>
             <label>Book_Publisher</label>
             <input type=\"text\" name=\"publisherId\" id=\"publisherId_insert\"><br>
             <label>Book_Image</label>
             <input type=\"text\" name=\"displayImage\" id=\"displayImage_insert\"><br>
            </form>
            <button onclick=\"add_to_books()\">Submit</button>";

        echo "<p id=\"add_to_books_response\"></p>";

    echo "<h2>Table: Author</h2>";
    
    print "<form>
        	    New Author First Name: <input type=\"text\" name=\"firstName\" id=\"firstName_insert\"><br>
                New Author Second Name: <input type=\"text\" name=\"secondName\" id=\"secondName_insert\"><br>
            </form>
            <button onclick=\"add_to_author()\">Submit</button>";

    echo "<p id=\"add_to_author_response\"></p>";

    echo "<h2>Table: Bookauthors</h2>";

    $bookId = "1234567891012";
    $bookId_json = "'1234567891012'";
    $authorId = "1";
    
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing bookid = $bookId</p>
            <p>Existing authorid = $authorId</p>
            <button onclick=\"add_to_bookauthors($bookId_json, $authorId)\">Submit</button>";
    
    echo "<p id=\"add_to_bookauthors_response\"></p>";

    echo "<h2>Table: Customers</h2>";
    print "<h3>Via Form</h3>
        <form>
             <label>ID</label>
             <input type=\"number\" name=\"id\" id=\"id_insert\"><br>
             <label>Email</label>
             <input type=\"text\" name=\"email\" id=\"email_insert\"><br>
             <label>First_Name</label>
             <input type=\"text\" name=\"firstName\" id= \"firstName_insert_cust\"><br>
             <label>LastName</label>
             <input type=\"text\" name=\"LastName\" id=\"lastName_insert\"><br>
             <label>PostalCode</label>
             <input type=\"number\" name=\"postalCode\" id=\"postalCode_insert\"><br>
             <label>Street</label>
             <input type=\"text\" name=\"street\" id=\"street_insert\"><br>
             <label>Address_Line1</label>
             <input type=\"text\" name=\"addessLine1\" id=\"addessLine1_insert\"><br>
             <label>Address_Line2</label>
             <input type=\"text\" name=\"addressLine2\" id=\"addressLine2_insert\"><br>
             <label>City</label>
             <input type=\"text\" name=\"city\" id=\"city_insert\"><br>
             <label>Country</label>
             <input type=\"text\" name=\"counrty\" id=\"country_insert\"><br>
             <label>Phone_number</label>
             <input type=\"text\" name=\"phone\" id=\"phone_insert\"><br>
             <label>User_Name</label>
             <input type=\"text\" name=\"userName\" id=\"userName_insert\"><br>
             <label>Password</label>
             <input type=\"text\" name=\"passwordencrypted\" id=\"passwordencrypted_insert\"><br>
             <label>Is_Admin</label>
             <input type=\"number\" name=\"isAdmin\" id=\"isAdmin_insert\"><br>
             <label>emailVerified</label>
             <input type=\"number\" name=\"emailVerified\" id=\"emailVerified_insert\"><br>
             <label>phoneVerified</label>
             <input type=\"number\" name=\"phoneVerified\" id=\"phoneVerified_insert\"><br>
             <label>RegistrationDate</label>
             <input type=\"datetime-local\" name=\"registrationDate\" id=\"registrationDate_insert\"><br>
             <label>LastOnline</label>
             <input type=\"datetime-local\" name=\"lastOnline\" id=\"lastOnline_insert\"><br>
             <label>ReferralCode</label>
             <input type=\"text\" name=\"referralCode\" id=\"referralCode_insert\"><br>
             <label>ReferredBy</label>
             <input type=\"text\" name=\"referredBy\" id=\"referredBy_insert\"><br>
             <label>Permission_for_Data_Storage</label>
             <input type=\"number\" name=\"dataStoragePermission\" id=\"dataStoragePermission_insert\"><br>
             <label>dob</label>
             <input type=\"date\" name=\"dob\" id=\"dob_insert\"><br>
        </form>
         <button onclick=\"add_to_customers()\">Submit</button>";

        echo "<p id=\"add_to_customers_response\"></p>";
    $bookId = "1234567891012";
    $bookId_json = "'1234567891012'";
    $orderId = "6";
    
    print "<h3>add order details</h3>
            <p>Existing bookId = $bookId</p>
            <p>Existing orderId = $orderId</p>
            <form>
        	    Quantity: <input type=\"number\" name=\"quantity\" id=\"${bookId}_quantity_insert\" value=\"1\"><br>
            </form>
            <button onclick=\"add_to_orderdetails($orderId , $bookId_json)\">Submit</button>";
    
    echo "<p id=\"add_to_orderdetails_response\"></p>";


    $customerId = "1";
    
    echo "<h2>Table: Orders</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Orders_orderDate</label>
             <input type=\"date\" name=\"orderDate\" id=\"orderDate_insert\"><br>
             <label>Orders_status</label>
             <input type=\"text\" name=\"status\" id=\"status_insert\"><br>
             <label>Orders_extraDetails</label>
             <input type=\"text\" name=\"extraDetails\" id= \"extraDetails_insert\"><br>
             <label>Orders_promoCode</label>
             <input type=\"text\" name=\"promoCode\" id=\"promoCode_insert\"><br>
             <label>Orders_paymentMethod</label>
             <input type=\"text\" name=\"paymentMethod\" id=\"paymentMethod_insert\"><br>
             <label>Orders_totalPrice</label>
             <input type=\"number\" name=\"totalPrice\" id=\"totalPrice_insert\" step=\"0.01\"><br>
             <label>Orders_discount</label>
             <input type=\"number\" name=\"discount\" id=\"discount_insert\" step=\"0.01\"><br>
             <label>Orders_finalPrice</label>
             <input type=\"number\" name=\"finalPrice\" id=\"finalPrice_insert\" step=\"0.01\"><br>
             <label>Orders_currency</label>
             <input type=\"text\" name=\"currency\" id=\"currency_insert\"><br>

             </form>
            <button onclick=\"add_to_orders($customerId)\">Submit</button>";
    
    echo "<p id=\"add_to_orders_response\"></p>";


   ?>

    <h1>Testing - Update</h1>

    <!-- ==== Testing components - update ==== 
    ======================================== --> 
    <?php
     print "<h1>Update Database Tables</h1>";

$bookId = "1234567891012";
$bookId_json = "'1234567891012'";
$orderId = "6";

print "<h3>update orderdetails</h3>
        <p>Existing bookId = $bookId</p>
        <p>Existing orderId = $orderId</p>
        <form>
            New Quantity: <input type=\"number\" name=\"quantity\" id=\"${bookId}_quantity_update_orderdetails\" value=\"1\"><br>
        </form>
        <button onclick=\"update_in_orderdetails($orderId, $bookId_json)\">Submit</button>";

echo "<p id=\"update_in_orderdetails_response\"></p>";

   
    echo "<h2>Table: Cart</h2>";

    $bookid = "1234567891012";
    $bookid_json = "'1234567891012'";
    $customerid = "1";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing bookid = $bookid</p>
            <p>Existing customerid = $customerid</p>
            <form>
                New Quantity: <input type=\"number\" name=\"quantity\" id=\"${bookid}_quantity_update\" value=\"1\"><br>
            </form>
            <button onclick=\"update_in_cart($customerid, $bookid_json )\">Submit</button>";

    echo "<p id=\"update_in_cart_response\"></p>";

    echo "<h2>Table: Category</h2>";
    
    $categoryid = 1;

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing id = $categoryid</p>
            <form>
                New Name: <input type=\"text\" name=\"name\" id=\"category_name_update\"><br>
            </form>
            <button onclick=\"update_in_category($categoryid)\">Submit</button>";

    echo "<p id=\"update_in_category_response\"></p>";

    echo "<h2>Table: Publisher</h2>";
    
    $publisherid = "2";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing id = $publisherid</p>
            <form>
                New Type: <input type=\"text\" name=\"type\" id=\"publisher_type_update\"><br>
            </form>
            <button onclick=\"update_in_publisher($publisherid)\">Submit</button>";

    echo "<p id=\"update_in_publisher_response\"></p>";

    echo "<h2>Table: Genre</h2>";
    
    $genreid = "1";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing id = $genreid</p>
            <form>
                New Type: <input type=\"text\" name=\"type\" id=\"genre_type_update\"><br>
            </form>
            <button onclick=\"update_in_genre($genreid)\">Submit</button>";

    echo "<p id=\"update_in_genre_response\"></p>";



    echo "<h2>Table: Books</h2>";  

    $isbn = "123ABC";
    $isbn_json = "'123ABC'";
    $publisherId = "1";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing isbn = $isbn</p>
            <p>publisherId = $publisherId</p> 
            <form>
             New Title: <input type=\"text\" name=\"title\" id=\"title_updated\"><br>
             New Description: <input type=\"text\" name=\"description\" id=\"decription_updated\"><br>
             New Price: <input type=\"number\" name=\"price\" step=\".01\" id=\"price_updated\"><br>
             New Category:<input type=\"number\" name=\"categoryId\" id=\"category_updated\"><br>
             New Preview: <input type=\"text\" name=\"previewLink\" id=\"previewLink_updated\"><br>
             New Publication_Date: <input type=\"date\" name=\"publicationDate\" id=\"publicationDate_updated\"><br>
             New Edition: <input type=\"number\" name=\"edition\" id=\"edition_updated\"><br>
             New DisplayImage: <input type=\"text\" name=\"displayImage\" id=\"displayImage_updated\"><br>
            </form>
            <button onclick=\"update_in_books($isbn_json, $publisherId)\">Submit</button>";

            echo "<p id=\"update_in_books_response\"></p>";
 
            echo "<h2>Table: orders</h2>";

            $customerId = "1";
            $id = "6";
        
            print "<h3>Via Button with pre-defined values</h3>
                    <p>customerId = $customerId</p> 
                    <p>Id = $id</p> 

                    <form>
                     New orderDate: <input type=\"date\" name=\"orderDate\" id=\"orderDate_updated\"><br>
                     New status: <input type=\"text\" name=\"status\" id=\"status_updated\"><br>
                     New extraDetails: <input type=\"text\" name=\"extraDetails\"id=\"extraDetails_updated\"><br>
                     New promoCode:<input type=\"text\" name=\"promoCode\" id=\"promoCode_updated\"><br>
                     New paymentMethod: <input type=\"text\" name=\"paymentMethod\" id=\"paymentMethod_updated\"><br>
                     New totalPrice: <input type=\"number\" name=\"totalPrice\" id=\"totalPrice_updated\" step=\"0.01\"><br>
                     New discount: <input type=\"number\" name=\"discount\" id=\"discount_updated\" step=\"0.01\"><br>
                     New finalPrice: <input type=\"number\" name=\"finalPrice\" id=\"finalPrice_updated\" step=\"0.01\"><br>
                     New currency: <input type=\"text\" name=\"currency\" id=\"currency_updated\"><br>

                     </form>
                    <button onclick=\"update_in_orders($customerId, $id)\">Submit</button>";
        
                    echo "<p id=\"update_in_orders_response\"></p>";
         


    echo "<h2>Table: Author</h2>";
    
     $id = "3";
               
         print "<h3>Via Button with pre-defined values</h3>
        <p>Existing id = $id</p>
        <form>
            New First_Name: <input type=\"text\" name=\"firstName\" id=\"first_name_update\"><br>
            New Second_Name: <input type=\"text\" name=\"secondName\" id=\"second_name_update\"><br>
        </form>
        <button onclick=\"update_in_author($id)\">Submit</button>";
               
        echo "<p id=\"update_in_author_response\"></p>";
   

    echo "<h2>Table: Customers</h2>";
     $id = "4";
                   
         print "<h3>Via Button with pre-defined values</h3>
        <p>Existing id = $id</p>
                     <form>
                     New Email: <input type=\"text\" name=\"email\" id=\"email_update\"><br>
                     New_First_Name: <input type=\"text\" name=\"firstName\" id= \"firstName_update_cust\"><br>
                     New_Last_Name: <input type=\"text\" name=\"LastName\" id=\"lastName_update\"><br>
                     New_Postal_Code:<input type=\"number\" name=\"postalCode\" id=\"postalCode_update\"><br>
                     New_Street:<input type=\"text\" name=\"street\" id=\"street_update\"><br>
                     New_Addressline1: <input type=\"text\" name=\"addessLine1\" id=\"addessLine1_update\"><br>
                     New_Addressline2:<input type=\"text\" name=\"addressLine2\" id=\"addressLine2_update\"><br>
                     New_City: <input type=\"text\" name=\"city\" id=\"city_update\"><br>
                     New_Country: <input type=\"text\" name=\"counrty\" id=\"country_update\"><br>
                     New_Phone: <input type=\"text\" name=\"phone\" id=\"phone_update\"><br>
                     New_UserName: <input type=\"text\" name=\"userName\" id=\"userName_update\"><br>
                     New_Password: <input type=\"text\" name=\"passwordencrypted\" id=\"passwordencrypted_update\"><br>
                     New_Admin_status: <input type=\"number\" name=\"isAdmin\" id=\"isAdmin_update\"><br>
                     New_Email_status: <input type=\"number\" name=\"emailVerified\" id=\"emailVerified_update\"><br>
                     New_Phone_status: <input type=\"number\" name=\"phoneVerified\" id=\"phoneVerified_update\"><br>
                     New_Online_time: <input type=\"datetime-local\" name=\"lastOnline\" id=\"lastOnline_update\"><br>
                     New_Referral_Code: <input type=\"text\" name=\"referralCode\" id=\"referralCode_update\"><br>
                     New_referredby: <input type=\"text\" name=\"referredBy\" id=\"referredBy_update\"><br>
                     New_Data_Storage_Permission: <input type=\"number\" name=\"dataStoragePermission\" id=\"dataStoragePermission_update\"><br>
                     New_DOB: <input type=\"date\" name=\"dob\" id=\"dob_update\"><br>
                    </form>
                    <button onclick=\"update_in_customers($id)\">Submit</button>";
        
    echo "<p id=\"update_in_customers_response\"></p>";

?>


    <h1>Testing - Select</h1>

    <!-- ==== Testing components - select ==== 
    ======================================== --> 
    <?php
    print "<h1>Select Database Tables</h1>";

$orderId = "6";
 
print "<h3>orderdetails</h3>
        <p>Existing order Id = $orderId</p>
        <button onclick=\"select_from_orderdetails($orderId)\">Submit</button>";

echo "<p id=\"select_from_orderdetails_response\"></p>";

$customerId = "1";

print "<h3>orders</h3>
        <p>Existing customer Id = $customerId</p>
        <button onclick=\"select_from_orders($customerId)\">Submit</button>";

echo "<p id=\"select_from_orders_response\"></p>";

   
    echo "<h2>Table: Cart</h2>";

    $customerid = "1";
 
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing customerid = $customerid</p>
            <button onclick=\"select_from_cart($customerid)\">Submit</button>";

    echo "<p id=\"select_from_cart_response\"></p>";


   
    echo "<h2>Table: Category</h2>";
    $id = 1;
 
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing category id = $id</p>
            <button onclick=\"select_from_category($id)\">Submit</button>";

    echo "<p id=\"select_from_category_response\"></p>";

       
    echo "<h2>Table: Publisher</h2>";
    
    $id = "2";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing publisher id = $id</p>
            <button onclick=\"select_from_publisher($id)\">Submit</button>";

    echo "<p id=\"select_from_publisher_response\"></p>";


    echo "<h2>Table: Genre</h2>";
    
    $id = "1";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing genre id = $id</p>
            <button onclick=\"select_from_genre($id)\">Submit</button>";

    echo "<p id=\"select_from_genre_response\"></p>";


    echo "<h2>Table: Books</h2>";
    $isbn = "123ABC";
    $isbn_json = "'123ABC'";
 
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing isbn = $isbn</p>
            <button onclick=\"select_from_books($isbn_json)\">Submit</button>";

    echo "<p id=\"select_from_books_response\"></p>";

    echo "<h2>Table: Author</h2>";
    
    $id = "3";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing author id = $id</p>
            <button onclick=\"select_from_author($id)\">Submit</button>";

    echo "<p id=\"select_from_author_response\"></p>";

    echo "<h2>Table:Book_Authors</h2>";
    
    $id = "3";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing author id = $id</p>
            <button onclick=\"select_from_author($id)\">Submit</button>";

    echo "<p id=\"select_from_author_response\"></p>";
    print "<h1>Select Database Tables</h1>";
    echo "<h2>Table: bookpreview</h2>";

    $isbn = "'1'";
    $publisherId  = "1";
    $categoryId = "1";
 
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing isbn = $isbn</p>
            <button onclick=\"select_from_bookpreview($isbn, 'isbn')\">Submit</button>";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing publisherId = $publisherId</p>
            <button onclick=\"select_from_bookpreview($publisherId, 'publisherId')\">Submit</button>";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing categoryId = $categoryId</p>
            <button onclick=\"select_from_bookpreview($categoryId, 'categoryId')\">Submit</button>";

    echo "<p id=\"select_from_bookpreview_response\"></p>";


   
    echo "<h2>Table: Bookauthors</h2>";
    
    $bookId = "'1234567891012'";
    $authorId = "1";
    // $queryValue = $bookId;
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing book id = $bookId</p>
            <p> have the book, want the author(s)</p>
            <button onclick=\"select_from_bookauthors($bookId, 'authorId', 'bookId')\">Submit</button>";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing author id = $authorId</p>
            <p>hhave the author, want the book(s)</p>
            <button onclick=\"select_from_bookauthors($authorId, 'bookId', 'authorId')\">Submit</button>";

    echo "<p id=\"select_from_bookauthors_response\"></p>";

    echo "<h2>Table: Search BookPreview</h2>";
    print "<h3>Via Button with pre-defined values</h3>
            <form>
                New Query: <input type=\"text\" name=\"type\" id=\"bookpreview_search_select\"><br>
                New orderBy: <input type=\"text\" name=\"type\" id=\"bookpreview_search_select_orderBy\"><br>
                New offset: <input type=\"number\" name=\"type\" id=\"bookpreview_search_select_offset\"><br>
                New limit: <input type=\"number\" name=\"type\" id=\"bookpreview_search_select_limit\"><br>
            </form>
            <button onclick=\"search_select_from_bookpreview()\">Submit</button>";

    echo "<p id=\"search_select_from_bookpreview_response\"></p>";


    echo "<h2>Table: Customers</h2>";
    $id = "4";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing author id = $id</p>
            <button onclick=\"select_from_customers($id)\">Submit</button>";

    echo "<p id=\"select_from_customers_response\"></p>";

    ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
  </body>
</html>
