<?php
// selects the customerdiscounts of a customer, through the `customerdiscounts` table in database `bookstore`. Takes in input the customerid whose customerdiscounts is to be selectd and outputs a JSON with response code and selected rows.

// **REQUIRES**
// A JSON object named "customerdiscounts_select_input_query" must be POSTed to this file with the following key-value pairs:
 
// customerdiscounts_select_input_query = 
//     {
//         Key: "customerid"
//         Value: the customer's database id - should be able to be converted into type int 
//     }

// **ENSURES**
// the customer's customerdiscounts is returned, i.e, all bookids and quantity in that customer's customerdiscounts
// A JSON response is outputted, "customerdiscounts_select_output_response" which is formed as:

// customerdiscounts_select_output_response = 
//     {  
//         "response_code": <RESPONSE CODE>,
//         "response": [{"customerId": <customer ID>,
//                       "discountId": <discount ID>, 
//                      }...]
//     }


// DEBUGGING TOOL - COMMENT OUT LATER - TO DO! 🔲
include "../../../debug/chromephp-master/ChromePhp.php";

require "../../../internal/dbconnect.php";
session_start();

$sql = "SELECT * FROM `customerdiscounts` WHERE `discountId`= ?";

// log to console
ChromePhp::log($sql);

// decode the JSON POSTed variable
$select_input_query_encoded = $_REQUEST["customerdiscounts_select_input_query"];
$select_input_query = json_decode($select_input_query_encoded);


// Parse the POST-ed JSON input object into individual attributes
$discountid = number_format($select_input_query->discountid);
ChromePhp::log("\ndiscountid=$discountid");

// prepares the SQL statement
$stmt = $mysqli->prepare($sql);

ChromePhp::log("Query Prepared");


// checks for errors
if(! $stmt) 
{	
    echo "ERROR:: ".$mysqli->error;
}

// binds parameters to their respective datatypes in the database
$stmt->bind_param("i",$discountid);

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

$customerdiscounts_select_output_response = json_encode($response);

// REMOVE - TO DO 🔲
ChromePhp::log("\nComponent Output Response=$customerdiscounts_select_output_response");

print $customerdiscounts_select_output_response;
?>