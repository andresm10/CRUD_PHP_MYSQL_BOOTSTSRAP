<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="es">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title=isset($title)?$title:'CRUD con PHP, MySql y Bootstrap'; ?></title>
	<link rel="stylesheet" type="text/css" href="./misc/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./misc/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		body{
			/*margin-top: 20px;*/
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light nav-bar">
  		<a class="navbar-brand list-items" href="index.php"><strong>CodigoWebLibre</strong></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		  <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown text-right ">
		        <a class="nav-link dropdown-toggle list-items" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Eddie Vedder
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Salir</a>
		        </div>
		      </li>
		    </ul>
		  </div>
</nav>
	<div class="container">