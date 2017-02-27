<?php

$usrName = "acmiller24"; // your cartoDB username
$api_key = 'ba78d9df38a16fd6ce981d7b4c5a4dc92d631fce'; // your cartoDB API key (only for backendless)

ini_set('display_errors', 1); 
error_reporting(E_ALL);

//require_once( dirname(dirname(__FILE__)) . "/wp-authenticate.php");

header('Content-type: application/json');

/*if (!is_user_logged_in()) {
	header('HTTP/1.1 401 Unauthorized', true, 401);
	echo json_encode(array('status' => 'failure', 'message' => 'Unauthorized', 'code' => 401));
} else*/
if(isset($_POST['q'])) {
	$url = 'https://' . $usrName . '.carto.com/api/v2/sql';
	$request = array( 
		'q' => $_POST['q'],
		'api_key' => $api_key
	);

	// use key 'http' even if you send the request to https://...
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded",
	        'method'  => 'POST',
	        'content' => http_build_query($request)
	    )
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { 
		//header('HTTP/1.1 400 Bad Request', true, 400);
		echo json_encode(array('status' => 'failure', 'message' => 'Error', 'code' => 400));
	} else {
		//var_dump($result);
		echo json_encode($result);
	}	
} else {
	header('HTTP/1.1 400 Bad Request', true, 400);
	echo json_encode(array('status' => 'failure', 'message' => 'Query is abcent', 'code' => 400));
}
die;

?>