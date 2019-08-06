<?php
include 'dbh.inc.php';


$id_intrebare=$_GET['id'];
$sql="DELETE FROM intrebari WHERE id=$id_intrebare";
$result=mysqli_query($conn,$sql);



header("Location: ../administrare.php");


?>