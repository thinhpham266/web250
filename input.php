<?php
require_once ('dbhelp.php');

$s_fullname = $s_age = $s_address = $s_pwd = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['fullname'])) {
		$s_fullname = $_POST['fullname'];
	}

	if (isset($_POST['age'])) {
		$s_age = $_POST['age'];
	}

	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}
	if (isset($_POST['pwd'])) {
		$s_pwd = $_POST['pwd'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$s_fullname = str_replace('\'', '\\\'', $s_fullname);
	$s_age      = str_replace('\'', '\\\'', $s_age);
	$s_address  = str_replace('\'', '\\\'', $s_address);
	$s_pwd  = str_replace('\'', '\\\'', $s_pwd);
	$s_id       = str_replace('\'', '\\\'', $s_id);

	if ($s_id != '') {
		//update
		$sql = "update customer set fullname = '$s_fullname', age = '$s_age', address = '$s_address', pwd = '$s_pwd' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into customer(fullname, age, address, pwd) value ('$s_fullname', '$s_age', '$s_address','$s_pwd' )";
	}

	// echo $sql;

	execute($sql);

	header('Location: index11.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from customer where id = '.$id;
	$customerList = executeResult($sql);
	if ($customerList != null && count($customerList) > 0) {
		$std        = $customerList[0];
		$s_fullname = $std['fullname'];
		$s_age      = $std['age'];
		$s_address  = $std['address'];
		$s_pwd		= $std['pwd'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Customer</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$s_fullname?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Age:</label>
					  <input type="number" class="form-control" id="age" name="age" value="<?=$s_age?>">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$s_address?>">
					</div>
					<div class="form-group">
					  <label for="password">Pass:</label>
					  <input type="password" class="form-control" id="pwd" name="pwd" value="<?=$s_pwd?>">
					</div>
					
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>