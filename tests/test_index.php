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
    <script src="ajax/ajax_inserts.js"></script>

    <script>
        function add_to_cart(customerid, bookid)
        {

            var quantity_id = bookid.substring(0,14) + "_quantity";           
            var quantity = parseInt($("#" + quantity_id).val());
                                    
            var data = {"customerid": customerid, 
                        "bookid": bookid,
                        "quantity": quantity
                       };
                       
            add_cart(data); 
        }
    </script>
  </head>
<body>
    <h1> testing index</h1>

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

    ChromePhp::log("\nline 62");

    $bookid = "1234567891012";
    $bookid_json = "'1234567891012'";
    $customerid = "1";
    $customerid_json = "1";

    print "<h3>Via Button with pre-defined values</h3>
            <p>bookid = $bookid</p>
            <p>customerid = $customerid</p>
            <form>
        	    Quantity: <input type=\"number\" name=\"quantity\" id=\"${bookid}_quantity\" value=\"1\"><br>
            </form>
            <button onclick=\"add_to_cart($customerid_json , $bookid_json )\">Submit</button>";
    
    ChromePhp::log("\n69");
    
    echo "<p id=\"add_to_cart_response\">hello</p>";
    
    ChromePhp::log("\n76");
   ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
  </body>
</html>
