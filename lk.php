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
			$query = mysqli_query($connect, "SELECT * FROM projects WHERE user='Sakha'"); 
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
		<form action="insert.php" method="GET">
		<input class="form-control" placeholder="заголовок" type="" name="name">
		<input class="form-control" placeholder="описание" type="" name="description">
		<input class="form-control" placeholder="Необходимая сумма" type="" name="goal">
		<input class="form-control" placeholder="Обложка" type="" name="img">
		<input class="form-control" placeholder="город" type="" name="city">
		<input class="form-control" placeholder="user" type="" name="user">
		<button>Добавить</button>
	</form>
	</div>
<div class="col-10 mx-auto">

	<h4 class="">My projects</h4>
	<p></p>
	<div class="row mt-5">

		<?php 
			for ($i=0; $i <mysqli_num_rows($query) ; $i++) {  ?>
				<?php $result = $query->fetch_assoc(); ?>
				<div class="col-4 border rounded mx-auto">
					<div style="height:300px; background-image:url(<?php echo $result['img']; ?>); background-size: cover; background-position:center"></div>
					<h4><?php echo $result['title']; ?></h4>
					<p><?php echo $result['description']; ?></p>
					<p style="margin-top: 80px">by <?php echo $result['user']; ?>,<img style="height: 15px; width: 15px" src="pin.png"> <?php echo $result["place"] ?></p>
					<p style="margin-top: 30px"><?php echo $result['goal']; ?>$ goal</p>
					<p style="color: green; margin-top: -20px"><?php echo $result['donated']; ?>$ pledged</p>
					<form action="update.php" method="GET"><input style="display: none" type="" name="id" value="<?php echo $result["id"] ?>"><button class="bg-success rounded border" style="color: white">Back this project +10$</button></form>

						<form method="GET" action="change.php">
							<input type="" name="id" style="display: none" value="<?php echo $result["id"]?>">
							<button class="rounded border bg-success" name="change" style="color: white">Редактировать</button>
						</form>
						<form method="GET" action="delete.php">
							<button class="rounded border bg-danger" name="delete" style="color: white">Удалить</button>
						</form>
				</div>
				
			<?php }
		 ?>

	</div>

</div>
</body>
</html>																