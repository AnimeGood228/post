<?php 
	$connect = mysqli_connect('127.0.0.1','root','','GG');
    $query_texts = "DELETE FROM Login (name, surname, password) 
    				VALUES ('{$_GET["gl"]}','{$_GET["gh"]}','{$_GET["gk"]}')";
?>к