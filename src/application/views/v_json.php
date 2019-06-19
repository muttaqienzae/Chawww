<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	
	echo json_encode($response);
?>