<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>User wall with sidebar show hide - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Css/principal2.css">
	<link rel="stylesheet" href="Css/principalUsuario.css">
	<link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/Librerias/jquery-3.6.1.min.js"></script>
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<div class="container bootstrap snippets bootdey">
		<div class="row profile">
			<div class="col-md-3" id="profileCol">
				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="https://bootdey.com/img/Content/User_for_snippets.png" class="img-responsive" alt="">
					</div>
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">
							<?php  echo 
								$_SESSION["NOMBRE_USUARIO"] .
								'<div hidden id="codigoEstudiante">'
									. $_SESSION["CODIGO"] .
								'</div>'
							?>
						</div>
					</div>
					<div class="profile-userbuttons">
						<button type="button" class="btn btn-info btn-sm">
							<i class="fa fa-user-plus"></i>
							Follow
						</button>
					</div>
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="active">
								<a href="#">
									<i class="glyphicon glyphicon-home"></i>
									Principal</a>
							</li>
							<li>
								<a href="#">
									<i class="glyphicon glyphicon-user"></i>
									Buscar</a>
							</li>

							<li>
								<a href="#">
									<i class="glyphicon glyphicon-flag"></i>
									Help </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9" id="contentCol">
				<div class="profile-content">
					<div class="row hidden-xs hidden-sm">
						<a href="#" class="btn btn-info" id="toggle-link">
							<i class="fa fa-arrow-left"></i>
							Menú
						</a>
						<hr class="hr-sep">
					</div>
					<div class="row">
						<div class="col-sm-12">
							<textarea id="textoPublicacion" class="form-control" rows="3"
								placeholder="Write an idea..."></textarea>
							<a class="Inputs"><button type="button" id="Bpublicar"
									class="btn btn-outline-success" onclick="publicar()">Publicar
								</button></a>

							<a class="Inputs" style="color: rgb(155, 208, 243);"><input id="materia" type="text"
									placeholder="Materia"> </a>
							<a class="Inputs" style="color: rgb(155, 208, 243);"><input id="tema" type=" text"
								placeholder="Tema"></a>
						</div>
					</div>
					<hr>
					<!-- post 1 -->
					<div id="contenedorPost">
						<div class="row">
							<div class="col-md-2">
								<img src="https://bootdey.com/img/Content/user_3.jpg"
									class="img-responsive  img-circle">
							</div>
							<div class="col-md-10">
								<div class="row post">
									<div class="col-md-12">
										<p id="ponerPublicacion">Sed ut perspiciatis unde omnis iste natus error sit
											voluptatem accusantium doloremque laudantium</p>
										<a data-placement="top"
											class="btn btn-success btn-xs glyphicon glyphicon-ok tip" href="#"
											title="View"></a>
										<a data-placement="top"
											class="btn btn-danger  btn-xs glyphicon glyphicon-trash tip" href="#"
											title="Delete"></a>
										<a data-placement="top"
											class="btn btn-info  btn-xs glyphicon glyphicon-share tip" href="#"
											title="Share"></a>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<!-- post 2 -->
						
						
						<!-- post 3 -->


					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	



	<script src="js/principalUsuario.js"></script>
	<script src="js/ajax.js"></script>
</body>

</html>