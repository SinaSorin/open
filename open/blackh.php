<?php
//session_start();
//include_once 'include/dbh.inc.php';

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
						<li><a class="link"  href="blackh.php">Hacker</a></li>
						<li><a class="link"  href="malware.php">Malware</a></li>
						<li><a class="link"  href="virus.php">Virus</a></li>
						<li><a class="link"  href="worm.php">Worm</a></li>

						<?php
						if(!isset($_SESSION['u_id']))
							echo '
						<li><a class="link" href="#" data-toggle="modal" data-target="#login-modal">Conectează-te</a></li>';
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
<div class="row">
					 <center>
						<h2>Hackerii cu pălărie neagra</h2>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon black_hat glyphicon glyphicon-remove"></i>
							<div class="feature-content">
								<h4>răufăcătorii care după 
ce depistează breşele de securitate le folosesc pentru a le exploata cu
 rea voinţă de cele mai multe ori în scopuri financiare</h4>
							</div>
						</div>
					</div>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon black_hat glyphicon glyphicon-remove"></i>
							<div class="feature-content">
								<h4>hackerul ilegal care încalcă securitatea calculatoarelor, rețelelor</h4>
							</div>
						</div>
					</div>
 
					<div class="col-md-4">
						<div class="feature">
							<i class="icon black_hat glyphicon glyphicon-remove"></i>
							<div class="feature-content">
								<h4>sunt specializati în testarea penetrării și în alte metodologii
								de testare prin mijloace ilegale pentru profitul personal</h4>
							</div>
						</div>
					</div>
 
			</center>

				
				<hr/>
				<div class="col-md-6">
						<h3></h3>
						<p class="lead">Un hacker este un expert în informatică, care se ocupă cu studiul în profunzime al programelor informatice (sisteme de operare, aplicații), adesea folosind tehnici de inginerie inversă (demontare), cu scopul de a obține cunoștințe care nu sunt accesibile publicului larg. </p>
					</div>

					<div class="col-md-5 col-md-offset-1">
						
							<img width="420px" height="400px"
src="poze/hacker-iconc.png">
					</div>
				
</div>

</body>
</html>