<?php
// Selects a row to the `bookdiscounts` table in database `bookstore`. Takes in input the row values to be selected and outputs a JSON with response code and selected id.

// **REQUIRES**
// A JSON object named "bookdiscounts_select_input_query" must be POSTed to this file with the following key-value pairs:
 
// bookdiscounts_select_input_query = 
//     {
//        Key: "bookid" 
//        Value: the book's database id (i.e, ISBN) - should be able to be converted into type varchar(13) 
//     }

// **ENSURES**
// the bookdiscounts is returned, i.e, bookid, discountid.
// A JSON response is outputted, "bookdiscounts_select_output_response" which is formed as:

// bookdiscounts_select_output_response = 
//     {  
//         "response_code": <RESPONSE CODE>,
//         "response": <SELECTED ROWS>
//     }


// DEBUGGING TOOL - COMMENT OUT LATER - TO DO! 🔲
include "../../../debug/chromephp-master/ChromePhp.php";

require "../../../internal/dbconnect.php";
session_start();

$sql = "SELECT * FROM `bookdiscounts` WHERE `bookId`= ?";

// log to console
ChromePhp::log($sql);

// decode the JSON POSTed variable
$select_input_query_encoded = $_REQUEST["bookdiscounts_select_input_query"];
$insert_input_query = json_decode($insert_input_query_encoded);


// Parse the POST-ed JSON input object into individual attributes

$bookId = $insert_input_query->bookId;
ChromePhp::log("\nbookId=$bookId");


// prepares the SQL statement
$stmt = $mysqli->prepare($sql);
ChromePhp::log("Query Prepared");

// checks for errors
if(! $stmt) 
{	
    echo "ERROR:: ".$mysqli->error;
}

// binds parameters to their respective datatypes in the database
$stmt->bind_param("s", $bookId); 

ChromePhp::log("Parameters Bound");

// executes statement
$stmt->execute();

ChromePhp::log("SQL Executed"); 

$response = json_decode("{}");

$response->response_code = $stmt->error;
if ($stmt->error == "")
{
    $response->response_code = "success";
}

$res = $stmt->get_result();
$r = $res->fetch_all(MYSQLI_ASSOC);
$response->response = json_encode($r);

$books_select_output_response = json_encode($response);


// REMOVE - TO DO 🔲
ChromePhp::log("\nComponent Output Response=$books_select_output_response");

print $books_select_output_response;
?> 