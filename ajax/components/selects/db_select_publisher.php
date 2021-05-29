<?php
// selects a row to the `publisher` table in database `bookstore`. Takes in input the id of the publisher to be selected and outputs a JSON with response code and select id.

// **REQUIRES**
// A JSON object named "publisher_select_input_query" must be POSTed to this file with the following key-value pairs:
 
// publisher_select_input_query = 
//     {
//         Key: "id" 
//         Value: the publisher's id - should be able to be converted into type int(11)
//     }

// **ENSURES**
// the publisher is returned by the id
// A JSON response is outputted, "publisher_select_output_response" which is formed as:

// cart_select_output_response = 
//     {  
//         "response_code": <RESPONSE CODE>,
//         "response": [{"id": <publisher ID>,
//                       "type": <publisher type>}...]
//     }


// DEBUGGING TOOL - COMMENT OUT LATER - TO DO! 🔲
include "../../../debug/chromephp-master/ChromePhp.php";

require "../../../internal/dbconnect.php";
session_start();

$sql = "SELECT * FROM `publisher` WHERE `id`=?";

// log to console
ChromePhp::log($sql);

// decode the JSON POSTed variable
$select_input_query_encoded = $_REQUEST["publisher_select_input_query"];
$select_input_query = json_decode($select_input_query_encoded);


// Parse the POST-ed JSON input object into individual attributes
$id = number_format($select_input_query->id);
ChromePhp::log("\nid=$id");

// prepares the SQL statement
$stmt = $mysqli->prepare($sql);

// checks for errors
if(! $stmt) 
{	
    echo "ERROR:: ".$mysqli->error;
}

// binds parameters to their respective datatypes in the database
$stmt->bind_param("i", $id);
ChromePhp::log("Parameters Bound");

// executes statement
$stmt->execute();
ChromePhp::log("SQL Executed");

// get the id of the select
$select_id = $mysqli->select_id;

// REMOVE - TO DO 🔲
ChromePhp::log("selected publisher: select_id=$select_id");

$response->response_code = $stmt->error;
if ($stmt->error == "")
{
    $response->response_code = "success";
}

$res = $stmt->get_result();
$r = $res->fetch_all(MYSQLI_ASSOC);
$response->response = json_encode($r);

$publisher_select_output_response = json_encode($response);

// REMOVE - TO DO 🔲
ChromePhp::log("\nComponent Output Response=$publisher_select_output_response");

print $publisher_select_output_response;
?>