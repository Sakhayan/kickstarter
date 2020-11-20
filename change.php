<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="col-12">
	<div class="row">
		<?php
			$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
			$query = mysqli_query($connect, "SELECT * FROM projects WHERE id = {$_GET['id']}"); 
			for ($i=0; $i <mysqli_num_rows($query) ; $i++) { 
				$result = $query->fetch_assoc();
			}
		 ?>
		<div class="col-2 pt-3">
			<a href="index.php" class="text-dark ml-3">Explore </a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href="lk.php"><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
	<div class="col-4 mx-auto">
		<form action="change2.php" method="GET">
			<input class="form-control" style="display: none"> value='<?php echo $result["id"]  ?>'  type="" name="id">
			<input class="form-control" value='<?php echo $result["title"] ?>' type="" name="name">
			<input class="form-control" value='<?php echo $result["description"] ?>'  type="" name="description">
			<input class="form-control" value='<?php echo $result["goal"] ?>'   type="" name="goal">
			<input class="form-control" value='<?php echo $result["img"] ?>'  type="" name="img">
			<input class="form-control" value='<?php echo $result["place"]?>'  type="" name="city">
			<input class="form-control" value='<?php echo $result["user"]  ?>'  type="" name="user">
		<button>Изменить</button>
	</form>
	</div>
</body>
</html>						