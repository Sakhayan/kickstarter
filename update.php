<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$query = mysqli_query($connect, "SELECT * FROM projects WHERE id={$_GET["id"]}");
	$result = $query->fetch_assoc();
	$a=$result["donated"]+100;
	$sql = mysqli_query($connect, "UPDATE projects SET donated = {$a} WHERE id={$_GET["id"]}");
	header('location: index.php');
 ?>