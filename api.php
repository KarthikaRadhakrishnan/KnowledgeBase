<?php

header('Access-Control-Allow-Origin: *');  // cross site security purpose 

// based on the click action, method will render
$action_name = filter_input(INPUT_GET, 'action');

if ($action_name == "view") {
    action_view();
} else if ($action_name == "remove") {
    action_remove();
}

/*
** view function - display the user information
*/	
function action_view(){
	$person_id = isset($_GET['id']) ? $_GET['id'] : 0; // get person id
	$display_type = isset($_GET['is_show_success']) ? $_GET['is_show_success'] : ''; // check success or failure message 
	$msg_type = ($display_type == 1) ? 1 : 0;
	
	$arr = array("msg" => "view","person_id" => $person_id,"msg_type" => $msg_type);

	echo json_encode($arr);
	
}

/*
** view function - display the user information
*/	
function action_remove(){
	$person_id = isset($_GET['id']) ? $_GET['id'] : 0; // get person id
	$display_type = isset($_GET['is_show_success']) ? $_GET['is_show_success'] : ''; // check success or failure message 
	$msg_type = ($display_type == 1) ? 1 : 0;
	
	$arr = array("msg" => "remove","person_id" => $person_id,"msg_type" => $msg_type);

	echo json_encode($arr);
	
}
	
	