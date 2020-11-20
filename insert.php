<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$query = mysqli_query($connect, "SELECT * FROM projects"); 
	$ins = "INSERT INTO projects (title, description, goal, img, user, place) VALUES ('".$_GET["name"]."','".$_GET["description"]."','".$_GET["goal"]."','".$_GET["img"]."','".$_GET["user"]."','".$_GET["city"]."')";
	mysqli_query($connect, $ins);
	header('Location: index.php');	
 ?>