<?php
	include dirname(__file__,2).'/models/users.php';
	include dirname(__file__,2).'/models/SendEmail.php';

	$users=new Users();
	$sendMail=new SendEmail();

	//Request: creacion de nuevo usuario
	if(isset($_POST['create']))
	{
		if($users->newUser($_POST)){
			header('location: ../index.php?page=new&success=true&folder='.$_GET['folder']);
		}else{
			header('location: ../index.php?page=new&error=true&folder='.$_GET['folder']);
		}
	}

	//Request: editar usuario
	if(isset($_POST['edit']))
	{
		if($users->setEditUser($_POST)){
			header('location: ../index.php?page=edit&id='.$_POST['id'].'&success=true&folder='.$_GET['folder']);
		}else{
			header('location: ../index.php?page=edit&id='.$_POST['id'].'&error=true&folder='.$_GET['folder']);
		}
	}

	//Request: editar usuario
	if(isset($_GET['delete']))
	{
		if($users->deleteUser($_GET['id'])){
			echo json_encode(["success"=>true]);
		}else{
			echo json_encode(["error"=>true]);
		}
	}

	//Request: Enviar email
	if(isset($_POST['newEmail']))
	{
    	$mail=$sendMail->newEmail("","",$_POST['emailDestination'],$_POST['emailName']." ".$_POST['emailLastName'],$_POST['emailSubject'],$_POST['emailBody']);
		if($mail===true){
			header("location: ../index.php?page=new_email&success=true&folder={$_GET['folder']}&email={$_POST['emailDestination']}&name={$_POST['emailName']}&last_name={$_POST['emailLastName']}");
		}else{
			header("location: ../index.php?page=new_email&error=true&folder={$_GET['folder']}&email={$_POST['emailDestination']}&name={$_POST['emailName']}&last_name={$_POST['emailLastName']}&error_message={$mail}");
		}
	}

?>