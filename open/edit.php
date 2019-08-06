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
			$id_intrebare=$_GET['id'];
			$sql="SELECT * FROM intrebari where id=$id_intrebare";
						$result=mysqli_query($conn,$sql);
						$resultCheck=mysqli_num_rows($result);
						if($resultCheck>0)
						{
							echo "<h2>Editare intrebare</h2>";
							echo "<form method='POST' action='include/edit.php?id=$id_intrebare'><p>";
							
							
							while($row=mysqli_fetch_assoc($result))
							{
								$intrebare=$row['continut'];								
								echo "<input type='text' name='data' value='$intrebare' class='date'><br>";
				$sql4="SELECT * FROM raspunsuri WHERE id_intrebare=$id_intrebare";
				$result4=mysqli_query($conn,$sql4);
				if(mysqli_num_rows($result4)>0)
				{	$i=0;
					while($row4=mysqli_fetch_assoc($result4))
					{
						$i++;
						$id=$row['id'];
						$raspuns=$row4['continut'];
						echo "<input type='radio' value='$i' class='date' name='radio' required>
						<input type='text' class='date' name='raspuns$i' value='$raspuns' required><br>";
					}
				}
							}
							echo "
							<input id='imp' name='imp' type='text' value='$i' style='display:none;'>
							<input type='submit' name='submit' class='v'></p></form>";
						}








			?>
	</div>		
</div>

</body>
</html>