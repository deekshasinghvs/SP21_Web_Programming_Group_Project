<!doctype html>
<html lang="en">
<?php
session_start();

require_once "internal/dbconnect.php";
include "debug/chromephp-master/ChromePhp.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <meta name="description" content="Admin Panel for Bookstore">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

    <title>Shopping Cart</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard.css" rel="stylesheet">

    <!-- Add ajax files -->
    <script src="js/ajax.js"></script>
    <script>
        function select_from_cart(customerid)
        {                        
            var data = {"customerid": customerid};

            // Calls below function in the ajax/ajax.js file 
            show_cart(data); 
        }
    </script>
</head>
<body>
 

<?php
// echo "<h2>Table: Cart</h2>";

    $customerid = "1";
 
    print "<h3>Via Button with pre-defined values</h3>
            <p>Existing customerid = $customerid</p>
            <button onclick=\"select_from_cart($customerid)\">Submit</button>";

    echo "<p id=\"select_from_cart_response\"></p>";

?>
</body>
<html>