<?php
include 'config.php';
$username="";
$email="";

if (isset($_POST['submit'])) {
	$username = get_safe_value($conn, $_POST['username']);
	$email = get_safe_value($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['pass']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$token = bin2hex(random_bytes(15));

	$emailquery = "SELECT * FROM login where email='$email'";
	$query = mysqli_query($conn, $emailquery);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount > 0) {
		echo "<script>alert('Email alreday exist in our Database.');</script>";
	} else {
		if ($password === $cpassword) {



			$insertquery = "INSERT into login(username, email, password,token)values('$username','$email','$pass','$token')";
			$iquery = mysqli_query($conn, $insertquery);

			$username = "";
			$email = "";
			$_POST['password'] = "";
			$_POST['cpassword'] = "";

			if ($iquery) {
?>
				<script>
					alert("Insertion Sucessfully");
					location.replace("login.php");
				</script>
			<?php
			} else {
			?>
				<script>
					alert("Not Inserted");
				</script>
			<?php
			}
		} else {
			?>
			<script>
				alert("Password ARE Not matching");
			</script>
<?php
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="">
		<div class="row" style="padding: 20px; margin: 30px;">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="text-center text-muted mb-6">

					<h3>Registration Form</h3></div><br>
				<div class="form-group ">
					<input type="text" name="username" class="form-control" id="username" placeholder="username" required>
				</div>
				<div class="form-group ">
					<input type="email" name="email" class="form-control" placeholder="Email Address" required>
				</div>
				<div class="form-group ">
					<input type="password" name="pass" class="form-control" placeholder="Password" required>
				</div>
				<div class="form-group ">
					<input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
				</div>
				<div class="form-group form-check">
			    	<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			    	<label class="form-check-label" for="exampleCheck1">I accept Terms & Privacy Policy.</label>
			    </div><br>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="text-center">
			<button type="submit" name="submit" class="btn btn-primary">Submit
			</button>
		</div>
	</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>