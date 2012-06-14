<?php 
$people = people::get_instance()->get_people();
$response = array();
foreach($people as $person){
	$response['people'][] = $person->__toArray();
}
//Prevent caching
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

echo json_encode($response);
