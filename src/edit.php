<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['surname1']) && isset($_POST['surname2']) && isset($_POST['age']) && isset($_POST['email'])) {
	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname1 = mysqli_real_escape_string($mysqli, $_POST['surname1']);
	$surname2 = mysqli_real_escape_string($mysqli, $_POST['surname2']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	// checking empty fields
	if(empty($name) || empty($surname1) || empty($age) || empty($email)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($surname1)) {
			echo "<font color='red'>Surname1 field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// updating the table
		$stmt = mysqli_prepare($mysqli, "UPDATE users SET name=?,surname1=?,surname2=?,age=?,email=? WHERE id=?");
		mysqli_stmt_bind_param($stmt, "sssisi", $name, $surname1, $surname2, $age, $email, $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
// getting id from url
$id = $_GET['id'];

$id = mysqli_real_escape_string($mysqli, $id);

// selecting data associated with this particular id
$stmt = mysqli_prepare($mysqli, "SELECT name, surname1, surname2, age, email FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $surname1, $surname2, $age, $email);
mysqli_stmt_fetch($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>

<body>
<div class = "container">
	<div class="jumbotron">
		<h1 class="display-4">Simple LAMP web app</h1>
		<p class="lead">Demo app</p>
	</div>

	<a href="index.php" class="btn btn-primary">Home</a>
	<br/><br/>

	<form action="edit.php" method="post">

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
		</div>

		<div class="form-group">
			<label for="name">Surname1</label>
			<input type="text" class="form-control" name="surname1" value="<?php echo $surname1;?>">
		</div>

		<div class="form-group">
			<label for="name">Surname2</label>
			<input type="text" class="form-control" name="surname2" value="<?php echo $surname2;?>">
		</div>

		<div class="form-group">
			<label for="name">Age</label>
			<input type="number" class="form-control" name="age" value="<?php echo $age;?>">
		</div>

		<div class="form-group">
			<label for="name">Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
		</div>

		<div class="form-group">
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" value="Update" class="form-control" >
		</div>

	</form>
</div>
</body>
</html>