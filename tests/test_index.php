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

    function add_to_publisher()
    {
        var type = $("#publisher_insert").val();
                                
        var data = {"type": type};

        // Calls below function in the ajax/ajax.js file
        add_publisher(data); 
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
        var firstName = $("#firstName_insert").val();
        var lastName = $("#lastName_insert").val();
        var postalCode = $("#postalCode_insert").val();
        var street = $("#street_insert").val();
        var addressLine1 = $("#addressLine1_insert").val();
        var addressLine2 = $("#addressLine2_insert").val();
        var city = $("#city_insert").val();
        var country = $("#country_insert").val();
        var phone = $("#phone_insert").val();
        var username = $("#userName_insert").val();
        var passwordEncrypted = $("#passwordEncrypted_insert").val();
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
                        "addressLine1":addressLine1,
                        "addressLine2":addressLine2,
                        "city": city,
                        "country":country,
                        "phone":phone,
                        "username":username,
                        "passwordEncrypted":passwordEncrypted,
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

    function update_in_books(isbn, publisherId)
    {
        var title = $("#title_updated").val();
        var description = $("#decription_updated").val();
        var price = $("#price_updated").val();
        var categoryId = $("#category_updated").val();
        var previewLink = $("#previewLink_updated").val();
        var publicationDate = $("#publicationDate_updated").val();
        var edition = $("#edition_updated").val();
        var displayImage = $("#displayImage_updated").val();
                                
        var data = {"isbn": isbn, 
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

    function select_from_publisher(id)
        {                        
            var data = {"id": parseInt(id)};

            // Calls below function in the ajax/ajax.js file 
            show_publisher(data); 
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

    function select_from_bookauthors( input_value, queryFor, input_key)
        {                        
            var data = {"queryFor": queryFor}
            data[input_key] = input_value;

            // Calls below function in the ajax/ajax.js file 
            show_bookauthors(data); 
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
             <input type=\"text\" name=\"firstName\" id= \"firstName_insert\"><br>
             <label>LastName</label>
             <input type=\"text\" name=\"LastName\" id=\"lastName_insert\"><br>
             <label>PostalCode</label>
             <input type=\"number\" name=\"postalCode\" id=\"postalCode_insert\"><br>
             <label>Street</label>
             <input type=\"text\" name=\"street\" id=\"street_insert\"><br>
             <label>Address_Line1</label>
             <input type=\"text\" name=\"addressLine1\" id=\"addressLine1_insert\"><br>
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
             <input type=\"text\" name=\"passwordEncrypted\" id=\"passwordEncrypted_insert\"><br>
             <label>Is_Admin</label>
             <input type=\"number\" name=\"isAdmin\" id=\"isAdmin_insert\"><br>
             <label>emailVerified</label>
             <input type=\"number\" name=\"emailVerified\" id=\"emailVerified_insert\"><br>
             <label>phoneVerified</label>
             <input type=\"number\" name=\"phoneVerified\" id=\"phoneVerified_insert\"><br>
             <label>RegistrationDate</label>
             <input type=\"datetime-local\" name=\"registrationDate\" id=\"registrationVerified_insert\"><br>
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

    echo "<h2>Table: Publisher</h2>";
    
    $publisherid = "2";

    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing id = $publisherid</p>
            <form>
                New Type: <input type=\"text\" name=\"type\" id=\"publisher_type_update\"><br>
            </form>
            <button onclick=\"update_in_publisher($publisherid)\">Submit</button>";

    echo "<p id=\"update_in_publisher_response\"></p>";

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

       
    echo "<h2>Table: Publisher</h2>";
    
    $id = "2";
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing publisher id = $id</p>
            <button onclick=\"select_from_publisher($id)\">Submit</button>";

    echo "<p id=\"select_from_publisher_response\"></p>";

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


    ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
  </body>
</html>
