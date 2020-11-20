<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$upd = "UPDATE projects SET title = '{$_GET['name']}', description = '{$_GET['description']}', goal = '{$_GET['goal']}' , donated = '{$_GET['donated']}' , img = '{$_GET['img']}' , user = '{$_GET['user']}' , place = '{$_GET['city']}' WHERE id='{$_GET['id']}'" ;
	mysqli_query($connect, $upd);
	header('Location: lk.php');
 ?>