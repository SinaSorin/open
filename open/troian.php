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
						<li><a class="link"  href="blackh.php">Hacker</a></li>
						<li><a class="link"  href="malware.php">Malware</a></li>
						<li><a class="link"  href="virus.php">Virus</a></li>
						<li><a class="link"  href="worm.php">Worm</a></li>
						<li><a class="link"  href="troian.php">Troian</a></li>

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

<h2>TROIENII</h2>


 


<div class="row">
<div class="col-md-8 lead">Sunt programe ce au o utilitate declarată, dar care în secret execută activităţi dăunătoare. Un exemplu îl poate reprezenta un program de aflare a parolei. Acesta afişază binecunoscuta ferestră de logare cu numele utilizatorului. Utilizatorul introduce parola însă primeşte un mesaj de genul “Invalid password”. Parola este aflată şi se lansează adevărata secvenţă de logare. Utilizatorul nesuspectând nimic reintroduce parola şi se loghează pe sistem. Nu prezintă caracteristica de autoreplicare.
<p class="lead">Un troian se prezintă ca un fişier inofensiv şi interesant, tentându-l astfel pe utilizator să îl descarce de pe Internet, după care, precum grecii înarmaţi din burta calului, iese la iveală pericolul: software-ul malefic poate şterge documente sau poate instala alte programe vătămătoare.</p>
</div>
<div class="col-md-4">
<img width="400px" src="poze/troian.png">
</div>
</div>

 
				
 </div>

</div>
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>