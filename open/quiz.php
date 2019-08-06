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
.quiz {
	display:inline-flex;
	margin-left:30px;
	
}
.astea {
	margin-left:50px;
	text-align
}
.imagine {
	width:775px;
	border:1px solid black;
}
</style>
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
<div class="row">
					 
		<center><h2>Modalitati de combatere</h2>
		
		
		<form method='post'>
		<?php
			if(!isset($_POST['submit']))
			{
				$i=0;
				$sql="select * from quiz";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
					$i++;
					$intrebare=$row['intrebare'];
					echo "<h3>$i.$intrebare</h3>";
					$poza="poze_test/Imagine".$i.".png";
					echo "<img class='imagine' src='$poza'><br>
					<div class='astea'>
					<div class='quiz'><h3><input type='radio' name='intrebare$i' required value=1>Da</h3></div>
					<div class='quiz'><h3><input required  type='radio' name='intrebare$i' value=0>Nu</h3></div></div><br>";

					
				}
				echo "<input type='submit' name='submit' class='v' style='left:50px;'></form>";
				
				
				
			}
			else
			{
				$nota=0;
				$i=0;
				$sql="select * from quiz";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
					$i++;
					$intrebare=$row['intrebare'];
					$raspuns=$_POST["intrebare$i"];
					$corect=$row['raspuns'];
					echo "<h3>$i.$intrebare</h3>";
					$poza="poze_test/Imagine".$i.".png";
					echo "<img class='imagine' src='$poza'><br>
					<div class='astea'>
					<ul style='list-style-type:none;'>
					";
					if($raspuns==$corect)
					{
						
						$nota++;
						if($corect==1)
							echo "<li class='verde lead'>Da</li>
								<li class='lead'>Nu</li>";
						else
							echo "
						<li class='lead'>Da</li>
						<li class='verde lead'>Nu</li>";
						
					}
					else
					{
						if($corect==1)
							echo "<li class='verde lead'>Da</li>
								<li class='rosu lead'>Nu</li>";
						else
							echo "
						<li class='rosu lead'>Da</li>
						<li class='verde lead'>Nu</li>";
					}
						
					echo "</div>";

					
				}
				
				echo $nota;
				
				
				
				
				
				
				
				
				
			}




		?>
		</center>
		</div>
				
				
				
</div>

</body>
</html>