<?php
session_start();
include_once 'dbh.inc.php';


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
					echo "</div>";
				}
						
						
					}
				}





?>