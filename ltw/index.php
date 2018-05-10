<?php 
	//start session
	session_start();
	//load config
	include '../config.php';
	include '../application/model.php';
	include '../application/controller.php'; 
	
	if (isset($_GET["act"]) && $_GET["act"] == "logout") { 
		unset($_SESSION["username"]);
	}
	if (isset($_SESSION["username"])) { 
		$c = isset($_GET["controller"])?$_GET["controller"]:"";
		$controller = $c != "" ? "controller/controller_$c.php" :""; 
		include 'view/view_template.php';
	} else {
		include 'controller/controller_login.php';
	}

 ?>