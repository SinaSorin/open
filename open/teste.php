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
			
				$sql="select * from intrebari";
				$result=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_assoc($result))
				{
					$id=$row['id'];	
					
				}
				$gasit=0;
				while($gasit==0)
				{
					$rand=mt_rand(1,$id);
					$sql="select * from intrebari where id=$rand";
					$result=mysqli_query($conn,$sql);
					$resultCheck=mysqli_fetch_assoc($result);
					if($resultCheck>0)
					$gasit=1;
					$sql="select * from intrebari where id=$rand";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
						
						$intrebare=$row['continut'];
						echo "<h3>$intrebare</h3>";
						$sql2="SELECT * FROM raspunsuri WHERE id_intrebare=$rand";
				$result2=mysqli_query($conn,$sql2);
				if(mysqli_num_rows($result2)>0)
				{
					echo "<div id='s'>";
					while($row2=mysqli_fetch_assoc($result2))
					{
						$continut=$row2['continut'];
						$j=$row2['id'];
						
						echo "<div class='raspuns' id='$j' onclick='raspuns($j,corect)'> $continut</div>";
					}
				}
						
						
					}
				}
			
			
		



			?>
	</div>		
</div>
<div class="tot2">
    
    <img id="c" class="poza p1" src="poze/computer.png">
    <div class="spatiu1"></div>
    <img id="v" class="poza p1" src="poze/virus.png">
    
</div> 
    <div class="health">
    <div id="hp1">5</div>
    <div class="spatiumare"></div>
    <div id="hp2">5</div>
   </div>
 <script src="js/fight.js"></script>
 <script src="js/joc.js"></script>
      <script type = "text/javascript"
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>
</body>
</html>