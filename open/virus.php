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

<div class="container" style="padding-left:43px;">
<h3 class="lead">

Virusul informatic este, în general, un program care se instalează fără voia utilizatorului şi
 provoacă pagube atât în sistemul de operare cât şi în elementele hardware ale computerului.</h3>
 
<p class="lead"> Clasificare:</p> 

<div class="row"><div class="col-md-6">
<center><p class="lead">Dupa tipul componentei virusate</p>
<img src="poze/clasificarec.png" style="height:50%;"></center>
</div>
<div class="col-md-6">
<center><p class="lead">Dupa modul in care contamineaza</p>
<img src="poze/cls.png" style="height:50%;"></center>
</div>
</div>
<br>
<div id="butoane" class="row">

						<h1>Tipuri de virusi:</h1>
						<a class="v active" id="h" onclick="schimba(1)">de Boot</a>
                        <a class="v " onclick="schimba(2)">de fisier</a>
                        <a class="v " onclick="schimba(3)">Macro</a>
                       <a class="v " onclick="schimba(4)">multipatrizi</a>
                        <a class="v " onclick="schimba(5)">polimorfi</a>
                        <a class="v" onclick="schimba(6)">Stealth</a>
                        </p>
					</div>
						<p class="lead" >
                        <p id="vorbitor" style="list-style-type:circle; font-size:18px; " class="area">
						infectează sectorul de boot, adică acea parte a hard-disk-ului care este accesată la pornirea calculatorului

                        </p>
                        </p>
							

				
 </div>

</div>
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>