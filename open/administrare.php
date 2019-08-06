<?php
session_start();
include_once 'include/dbh.inc.php';

 ?>
 <html>
 <head>
 <title>Index</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<a href="index.php">
							<img src="poze/simi.png" class="logo">
						</a>
					</div>
					<button class="navbar-toggle">
						<span></span>
					</button>
				</div>
 

			</div>
			<div id="tot" class="tot">
			<?php
			$sql="SELECT * FROM intrebari";
						$result=mysqli_query($conn,$sql);
						$resultCheck=mysqli_num_rows($result);
						if($resultCheck>0)
						{
							$i=0;
							echo "<a class='v' href='creareintrebari.php' style='float:right;margin-top:12px;margin-right:10px;'>Adaugă intrebari</a>";
							echo "<h2>Întrebări</h2><br>";
							while($row=mysqli_fetch_assoc($result))
							{
								$i++;
								$intrebare=$row['continut'];
				$id_intrebare=$row['id'];
				echo "<h3>".$i.".".$intrebare."</h3>
				<a class='glyphicon glyphicon-trash cos' href='include/deletei.php?id=$id_intrebare'></a>
				<a href='edit.php?id=$id_intrebare' class='glyphicon glyphicon-pencil cos'></a>
				
				";
				$sql4="SELECT * FROM raspunsuri WHERE id_intrebare=$id_intrebare";
				$result4=mysqli_query($conn,$sql4);
				if(mysqli_num_rows($result4)>0)
				{
					echo  "<ul>";
					while($row4=mysqli_fetch_assoc($result4))
					{
						
						$raspuns=$row4['continut'];
						$corect_r=$row4['corect'];
							if($corect_r==1)
								echo "<b><li class='verde'>$raspuns</li></b>";
								//verde
							else
								echo "<li class='normal'>$raspuns</li>";
								//nimic
					}
					echo "</ul>";
				}
							}
						}








			?>
	</div>		
</div>

</body>
</html>