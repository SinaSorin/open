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
						<a href="index.php">
							<img src="poze/simi.png" class="logo">
						</a>
					</div>
					<button class="navbar-toggle">
						<span></span>
					</button>
				</div>
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a class="link"  href="whiteh.php">Hacker</a></li>
						<li><a class="link"  href="antivirus.php">Antivirus</a></li>
						<li><a class="link"  href="quiz.php">Quiz</a></li>

						
						
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

<div class="container" style="padding-left:43px;">
<center><h2>Programele antivirus</h2></center>
<h3 class="lead">
Programele antivirus sunt create special pentru:
</h3><div><ol class="impr lead">
					<li><b>detectarea viruşilor prin verificarea conţinutului fişierelor şi semnalarea prezenţei semnăturii unui virus cunoscut sau a unor secvenţe suspecte în interiorul lor;</b>
					</li>
					<li><b>dezinfectarea sau ştergerea fişierelor infectate;</b> 				
					</li>
					<li><b>Răspândirea de la un calculator la altul se face prin intermediul mediului de reţea</b> </li>
					</ol>
</div>
<div class="container">
<div id="domenius-wrapper">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="poze/bitdefender.png" alt="">
									
								</a>								
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="./poze/avast.png" alt="">
									
								</a></div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="./poze/avira.png" alt="">
									
								</a>
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="./poze/norton.png" alt="">
									
								</a>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="poze/mc.png" alt="">
									
								</a></div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="domeniu">
								<a class="domeniu-img">
									<img src="./poze/avg.png" alt="">
									
								</a>
							</div>
						</div>
						</div>

				</div>

				</div>
</html>