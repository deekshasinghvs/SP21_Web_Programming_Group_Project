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
    function add_to_books(categoryId, publisherId)
    {
        var isbn_id = "isbn_insert";
        var isbn = $("#"+ isbn_id).val();
        var title_id = "title_insert";
        var title = $("#"+title_id).val();
        var description_id = "description_insert";
        var description = $("#"+ description_id).val();
        var price_id = "price_insert";
        var price = $("#"+ price_id).val();
        var previewLink_id = "previewLink_insert";
        var previewLink = $("#"+ previewLink_id).val();
        var publicationDate_id = "publicationDate_insert";
        var publicationDate = $("#"+ publicationDate_id).val();
        var edition_id = "edition_insert";
        var edition = $("#"+ edition_id).val();
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

    function add_to_orders(Id, customerId)
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
        
                                
        var data = {"id": id,
                    "customerId": customerId,
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

    function add_to_bookdiscounts()
    {
        var book_id = "bookId_insert";
        var bookId = $("#" + book_Id).val();
        var discount_id = "discountId_insert";
        var discountId = $("#" + discount_Id).val();
        
        
        var data = {"bookId": bookId,
                    "discountId": discountId,
                    };

        // Calls below function in the ajax/ajax.js file
        add_booksdiscounts(data); 
    }

    function add_to_wishlist(customerId, bookId)
    {
        var dateAdded_id = "dateAdded_insert";
        var dateAdded = $("#" + dateAdded_id).val();    
                                
        var data = {"customerId": customerId,
                    "bookId": bookId,
                    "dateAdded": dateAdded, 
                    };

        // Calls below function in the ajax/ajax.js file
        add_wishlist(data); 
    }

    function add_to_customerdiscounts(customerId, discountId)
    {
                              
        var data = {"customerId": customerId,
                    "discountId": discountId,
                    };

        // Calls below function in the ajax/ajax.js file
        add_customerdiscounts(data); 
    }

    function add_to_discounts(id)
    {
        var type_id = "type_insert";
        var type = $("#" + type_id).val();
        var code_id = "code_insert";
        var code = $("#" + code_id).val();
        var value_id = "value_insert";
        var value = $("#" + value_id).val();
        var maxDiscount_id = "maxDiscount_insert";
        var maxDiscount = $("#" + maxDiscount_id).val();
        
                                
        var data = {"id": id,
                    "type": type,
                    "code": code, 
                    "value": value,
                    "maxDiscount": maxDiscount,
                    };

        // Calls below function in the ajax/ajax.js file
        add_discounts(data); 
    }

    function add_to_ratings(id, customerId, bookdId)
    {
        var rating_id = "rating_insert";
        var rating = $("#" + rating_id).val();
        var dateUpdated_id = "dateUpdated_insert";
        var dateUpdated = $("#" + dateUpdated_id).val();
                                
        var data = {"id": id,
                    "customerID": customerID,
                    "bookId": bookId, 
                    "rating": rating,
                    "dateUpdated": dateUpdated,
                    };

        // Calls below function in the ajax/ajax.js file
        add_ratings(data); 
    }

    function add_to_reviews(id, ratingId)
    {
        var review_id = "review_insert";
        var review = $("#" + review_id).val();
        var dateUpdated_id = "dateUpdated_insert";
        var dateUpdated = $("#" + dateUpdated_id).val();
                                
        var data = {"id": id,
                    "ratingId": ratingId, 
                    "review": review,
                    "dateUpdated": dateUpdated,
                    };

        // Calls below function in the ajax/ajax.js file
        add_reviews(data); 
    }

// ======================================================
// JS functions for updating a row in the databse 
// =======================================================

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

// ======================================================
// JS functions for selecting rows from the database 
// =======================================================
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
            <button onclick=\"add_to_cart($customerid , $bookid_json)\">Submit</button>";
    
    echo "<p id=\"add_to_cart_response\"></p>";

    echo "<h2>Table: Category</h2>";
    
    print "<form>
        	    New Category Name: <input type=\"text\" name=\"category_name\" id=\"category_insert\"><br>
            </form>
            <button onclick=\"add_to_category()\">Submit</button>";
    
    echo "<p id=\"add_to_category_response\"></p>";
    
    $categoryId = "1";
    $publisherId = "1";
    
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
             <label>Book_Preview</label>
             <input type=\"text\" name=\"previewLink\" id=\"previewLink_insert\"><br>
             <label>Book_Publication_Date</label>
             <input type=\"date\" name=\"publicationDate\" id=\"publicationDate_insert\"><br>
             <label>Book_Edition</label>
             <input type=\"number\" name=\"edition\" id=\"edition_insert\"><br>
             <label>Book_Image</label>
             <input type=\"text\" name=\"displayImage\" id=\"displayImage_insert\"><br>
            </form>
            <button onclick=\"add_to_books($categoryId, $publisherId)\">Submit</button>";
    
    echo "<p id=\"add_to_books_response\"></p>";

    $id = "1";
    $customerId = "1";
    
    echo "<h2>Table: Orders</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Orders_orderDate</label>
             <input type=\"text\" name=\"orderDate\" id=\"orderDate_insert\"><br>
             <label>Orders_status</label>
             <input type=\"text\" name=\"status\" id=\"status_insert\"><br>
             <label>Orders_extraDetails</label>
             <input type=\"text\" name=\"extraDetails\" id= \"extraDetails_insert\"><br>
             <label>Orders_promoCode</label>
             <input type=\"text\" name=\"promoCode\" id=\"promoCode_insert\"><br>
             <label>Orders_paymentMethod</label>
             <input type=\"text\" name=\"paymentMethod\" id=\"paymentMethod_insert\"><br>
             <label>Orders_totalPrice</label>
             <input type=\"number\" name=\"totalPrice\" id=\"totalPrice_insert\"><br>
             <label>Orders_discount</label>
             <input type=\"number\" name=\"discount\" id=\"discount_insert\"><br>
             <label>Orders_finalPrice</label>
             <input type=\"number\" name=\"finalPrice\" id=\"finalPrice_insert\"><br>
             <label>Orders_currency</label>
             <input type=\"text\" name=\"currency\" id=\"currency_insert\"><br>

             </form>
            <button onclick=\"add_to_orders($id, $customerId)\">Submit</button>";
    
    echo "<p id=\"add_to_orders_response\"></p>";

    $bookId = "1234567891012";
    $discountId = "1";
    
    echo "<h2>Table: BookDiscounts</h2>";
    print "<h3>Via Form</h3>
             <form>
            <button onclick=\"add_to_bookdiscounts($bookId, $discountId)\">Submit</button>";
    
    echo "<p id=\"add_to_bookdiscounts_response\"></p>";

    $customerId = "1";
    $bookId = "1234567891012";
    
    echo "<h2>Table: Wishlist</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Wishlist_dateAdded</label>
             <input type=\"text\" name=\"dateAdded\" id=\"dateAdded_insert\"><br>

             </form>
            <button onclick=\"add_to_wishlist($customerid, $bookId)\">Submit</button>";
    
    echo "<p id=\"add_to_wishlist_response\"></p>";

    $customerId = "1";
    $bdiscountId = "1";
    
    echo "<h2>Table: CustomerDiscounts</h2>";
    print "<h3>Via Form</h3>
             </form>
            <button onclick=\"add_to_customerdiscounts($customerid, $discountId)\">Submit</button>";
    
    echo "<p id=\"add_to_customerdiscounts_response\"></p>";

    $id = "1";
    
    echo "<h2>Table: Discounts</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Discounts_type</label>
             <input type=\"text\" name=\"type\" id=\"type_insert\"><br>
             <label>Discounts_code</label>
             <input type=\"text\" name=\"code\" id=\"code_insert\"><br>
             <label>Discounts_value</label>
             <input type=\"text\" name=\"value\" id= \"value_insert\"><br>
             <label>Discounts_maxDiscounts</label>
             <input type=\"text\" name=\"maxDiscounts\" id=\"maxDiscounts_insert\"><br> 

             </form>
            <button onclick=\"add_to_discounts($id)\">Submit</button>";
    
    echo "<p id=\"add_to_discounts_response\"></p>";

    $id = "1"; 
    $customerId = "1";
    $bookId = "1234567891012";
    
    echo "<h2>Table: Ratings</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Ratings_rating</label>
             <input type=\"text\" name=\"rating\" id=\"rating_insert\"><br>
             <label>Ratings_dateUpdated</label>
             <input type=\"text\" name=\"dateUpdated\" id=\"dateUpdated_insert\"><br>

             </form>
            <button onclick=\"add_to_ratings($id, $customerId, $bookId)\">Submit</button>";
    
    echo "<p id=\"add_to_ratings_response\"></p>";

    $id = "1"; 
    $ratingId = "1";
    
    echo "<h2>Table: Reviews</h2>";
    print "<h3>Via Form</h3>
             <form>
             <label>Reviews_review</label>
             <input type=\"text\" name=\"review\" id=\"review_insert\"><br>
             <label>Reviews_dateUpdated</label>
             <input type=\"text\" name=\"dateUpdated\" id=\"dateUpdated_insert\"><br>

             </form>
            <button onclick=\"add_to_reviews($id, $ratingId)\">Submit</button>";
    
    echo "<p id=\"add_to_reviews_response\"></p>";

   ?>

    <h1>Testing - Update</h1>

    <!-- ==== Testing components - update ==== 
    ======================================== --> 
    <?php
    print "<h1>Update Database Tables</h1>";
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

?>


    <h1>Testing - Select</h1>

    <!-- ==== Testing components - select ==== 
    ======================================== --> 
    <?php
    print "<h1>Select Database Tables</h1>";
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


    ?>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
  </body>
</html>
