<?php
	define('HOMEDIR',__DIR__);

	include 'views/header.php';
	$page   =isset($_GET['page'])?$_GET['page']:'users';
	$folder =isset($_GET['folder'])?$_GET['folder']:'users';;
	if(isset($_POST['btnSearch'])){
		$search     =true;
		$dataSearch =$_POST['dataSearch'];
	}
	include 'views/'.$folder.'/'.$page.'.php';
	include 'views/footer.php';
