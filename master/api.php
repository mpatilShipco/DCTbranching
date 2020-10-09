<?php
$action = $_POST['action'];
$email = $_POST['email'];
$password = $_POST['password'];

switch ($action) {
	case 'login':
		$aResponse = array();
		$aResponse[0]['name'] = "Mayur";
		$aResponse[0]['access_token'] = "TestAccesstoken";
		$aResponse[0]['test1'] = "test 1";
		$aResponse[0]['test2'] = "test 2";
		$aResponse[0]['test3'] = "test 3";	

		echo json_encode($aResponse);	
		break;
	case 'dashboard':
		$aResponse = array();
		$aResponse[0]['name'] = "Mayur";
		$aResponse[0]['access_token'] = "TestAccesstoken";
		$aResponse[0]['test1'] = "test 1";
		$aResponse[0]['test2'] = "test 2";
		$aResponse[0]['test3'] = "test 3";

		echo json_encode($aResponse);		
		break;
	
	default:
		# code...
		break;
}

?>