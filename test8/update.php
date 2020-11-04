<?php 
	$con = mysqli_connect('127.0.0.1','root','','GG');
	mysqli_query($con, "UPDATE gg SET text=' {$_GET['gl1']}',img= '{$_GET['gh1']}' WHERE id=' {$_GET['gk1']}'");
	header("Location: index.php");
    
  exit;
 ?>