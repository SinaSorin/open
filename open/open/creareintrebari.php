<?php
session_start();
include_once 'include/dbh.inc.php';

 ?>
 <html>
 <head>
 <title>Index</title>
 <link rel="shortcut icon" href="motanel.png" type="image/png">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/modal.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
     <link type="text/css" rel="stylesheet" href="css/style.css"/>
<head>
<style>
.impromptu {
	margin-left: 0px;
	color:black;
	font-weight:500;
	font-size:30px;
}
input[type="text"] {
	margin-top:10px;
	width:unset;
}
</style>
</head>
<body>
<div class="container">

				<div class="navbar-header">
					<div class="navbar-brand">
						<a class="logo" href="#">
							<span class="debate" style="color:gray">Logo</span>
						</a>
					</div>
					<button class="navbar-toggle">
						<span></span>
					</button>
				</div>
					<ul class="main-menu nav navbar-nav navbar-right">
						
						<?php
						if(!isset($_SESSION['u_id']))
							echo '
						<li><a class="link" href="#" data-toggle="modal" data-target="#login-modal">Conectează-te</a></li>
						<li><a class="link" href="#" data-toggle="modal" data-target="#register-modal">Înregistrează-te</a></li>';
						else
							echo '
						<li><a class="link" href="include/logout.inc.php" id="logout">Deconectează-te</a></li>';
						
						
						?>
						
					</ul>
 

			</div>
			<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Conectează-te</h1><br>
				  <form action="include/login.inc.php" autocomplete="off" method="POST">
						<input type="text" name="uid" placeholder="Nume de utilizator"> 
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Conectare">
				  </form>
					
				  
				</div>
			</div>
		  </div>
		  
	

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="registermodal-container">
					<h1>Creează un cont</h1><br>
				  <form action="include/signup.inc.php" method="POST">
						<input type="text" name="first" autocomplete="off" placeholder="Nume"> 
						<input type="text" name="last" autocomplete="off" placeholder="Prenume">
						<input type="text" name="uid" autocomplete="off" placeholder="Nume de utilizator">
						<input type="text" name="email" autocomplete="off" placeholder="Email">
						<input type="password" name="pwd" placeholder="Parolă">
						<input type="password" name="pwd2" placeholder="Confirmă parolă">
						<input type="submit" name="submit" class="login loginmodal-submit" value="Înregistrare">
				  </form>
					
				 
				</div>
			</div>
		  </div>
			<div class="container">
			<div style="margin-left:40%;margin-top:5%">
				<span class="lead">Adaugă întrebări:</span>
<button type="button" id="btn1" class="btn">+</button>
<button type="button"  id="btn2" class="btn">-</button>



<form method="POST" action="include/grila.php"><span id="span" class="span"></span>

<input id="imp" name="imp" type="text" style="display:none;">
 <input type="submit" name="submit" class="v">
 </form>
		
		
		
				</div>
				</div>


<script src="js/grila.js"></script>
</body>
</html>