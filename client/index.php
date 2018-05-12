<?php 
	//start session
	session_start();
	//load config
	include '../config.php';
	include '../application/model.php';
	include '../application/controller.php'; 
	
	$c = isset($_GET["controller"])?$_GET["controller"]:"";
	$controller = $c != "" ? "controller/controller_$c.php" :""; 
	include 'view/view_template.php';
	
	if (isset($_GET["act"]) && $_GET["act"] == "logout") { 
		session_destroy();
		header('location:index.php?controller=view_sanpham');
	} 

 ?>