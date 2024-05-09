<?php

//Setup token to look for
$token_required = "1234";

//See if we have $_GET request with field 'token'
if (isset($_GET['token']) && !empty($_GET['token'])) {

 //Set $token_submitted variable to what was submitted
 $token_submitted = $_GET['token'];

 //Check the token to see if it matches
 if (strcmp($token_submitted, $token_required) == 0) {

 $data['data']['message'] = "Token match! Open the pod bay doors HAL..";
 //Display JSON results
 header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);

 } else {

  $data['data']['message'] = "Token does not match! I'm sorry Dave, I cannot do that..";
 //Display JSON results
 header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);
 }
} else {

  $data['data']['message'] = "No token! Need to send token via GET request e.g yourserver.com/results.php?token=1234";
 //Display JSON results
 header("Access-Control-Allow-Origin: *");
 header('Content-Type: application/json; charset=utf-8');
 echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT);

}
?>
