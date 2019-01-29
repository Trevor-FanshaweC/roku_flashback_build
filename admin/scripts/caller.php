<?php 
	require_once('config.php');

	if(isset($_GET['caller_id'])){
		$action = $_GET['caller_id'];

		switch($action){
			case 'logout':
				logged_out();
				break;
		}
	}