<?php
session_start();
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
	$id=$_GET['id'];
	$intrebare=mysqli_real_escape_string($conn,$_POST["data"]);
	$sql="UPDATE intrebari
SET continut = '$intrebare'
WHERE id=$id;";
	$result=mysqli_query($conn,$sql);
	
	
$nr_intrebari=mysqli_real_escape_string($conn,$_POST['imp']);
$raspuns_corect=mysqli_real_escape_string($conn,$_POST["radio"]);
echo $raspuns_corect;


for($i=1;$i<=$nr_intrebari;$i++)
{
	$varianta=mysqli_real_escape_string($conn,$_POST["raspuns$i"]);
}
$i=0;

	$sql="select * from raspunsuri where id_intrebare=$id";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
		$i++;
		$id_r=$row['id'];
		$corect=0;
		$varianta=mysqli_real_escape_string($conn,$_POST["raspuns$i"]);
		echo $varianta;
		if($i==$raspuns_corect)
			$corect=1;
		$sql="UPDATE raspunsuri
SET continut = '$varianta',corect='$corect'
WHERE id=$id_r;";
echo $corect;
		$result2=mysqli_query($conn,$sql);
		
		
		
	}

	
		header("Location: ../administrare.php");

}






?>