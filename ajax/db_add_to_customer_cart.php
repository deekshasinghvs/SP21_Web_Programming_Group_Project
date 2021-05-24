<!--
**REQUIRES**
 POST request to this file with the following information
 $_REQUEST["customerid"] with the customer's database id - should be able to be converted into type int
 $_REQUEST["bookid"] with the book's database id (i.e, ISBN) - should be able to be converted into type varchar(13)
 $_REQUEST["quantity"] with the quantity of books the customer wants to add to their cart - should be able to be converted into type int
**ENSURES**
a new row is inserted into the cart table in the database with the passed attributes.
 -->

<?php

// DEBUGGING TOOL - COMMENT OUT LATER - TO DO! 🔲
include "../debug/chromephp-master/ChromePhp.php";

require "../internal/dbconnect.php";
session_start();

$sql = "INSERT INTO `cart`(`customerId`, `bookId`, `quantity`) VALUES (?,?,?)";

// log to console
ChromePhp::log($sql);

// Get the POST-ed attributes
$customerid = number_format($_REQUEST["customerid"]);
$bookid = $_REQUEST["bookid"];
$quantity = number_format($_REQUEST["quantity"]);

// prepares the SQL statement
$stmt = $mysqli->prepare($sql);

// checks for errors
if(! $stmt) 
{	
    echo "ERROR:: ".$mysqli->error;
}

// binds parameters to their respective datatypes in the database
$stmt->bind_param("isi", $customerid, $bookid, $quantity);

// executes statement
$stmt->execute();

// get the id of the insert
$cart_id = $mysqli->insert_id;

ChromePhp::log("Added to cart: cart_id=$cart_id");

?>