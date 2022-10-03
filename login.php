<?php
error_reporting(0);
include 'config.php';
if (isset($_POST['submit'])) {
	$msg = '';
	$email =  get_safe_value($conn, $_POST['email']);
	$password = get_safe_value($conn, $_POST['password']);

	$email_search = "SELECT * FROM login where email='$email'";
		$query = mysqli_query($conn, $email_search);

		$res = mysqli_query($conn, "select * from login where email='$email'");
		$check_user = mysqli_num_rows($res);
		if ($check_user > 0) {
			$row = mysqli_fetch_assoc($res);
			$_SESSION['USER_LOGIN'] = 'yes';
			$_SESSION['USER_ID'] = $row['id'];
			$_SESSION['USER_NAME'] = $row['username'];
		}
		
		$email_count = mysqli_num_rows($query);

		if ($email_count) {
			$email_pass = mysqli_fetch_assoc($query);

			$db_pass = $email_pass['password'];

			$pass_decode = password_verify($password, $db_pass);
			if ($pass_decode) {

				$msg = 'Login SucessFull';
				if(isset($_POST['remember'])){
			setcookie('username',$email,time()+10);
			setcookie('password',$password,time()+10);
		}else{
			setcookie('username',$email,30);
			setcookie('password',$password,30);
		}
	?>
				<script>
					location.replace("Jewellery Home.php");
				</script>
	<?php
			} else {
				$msg = 'Password is incorrect';
				//echo "<script>alert('Password is incorrect.');</script>";
			}
		} else {
			$msg = 'Invalid Email';
			//echo "<script>alert('Invalid Email.');</script>";
		}
	}
	$username_cookie='';
$password_cookie='';
$set_remember="";
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
	$username_cookie=$_COOKIE['username'];
	$password_cookie=$_COOKIE['password'];
	$set_remember="checked='checked'";	
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
		<div class="row">
   			<div class="col-md-4"></div>
			<div class="col-md-4" style="margin: 20px">
			  	<div class="form-group">
			  		<div class="text-center text-muted mb-6"><h3>Sign in</h3></div>
			    	<label for="exampleInputEmail1">Email address</label>
			    	<input type="email" name="email" class="form-control" id="exampleInputEmail1"value="<?php echo $username_cookie; ?>" required>
			    	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  	</div>
			  	<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1"value="<?php echo $password_cookie; ?>" required>
				</div>
				
				<div style="color:blue;font-weight:500;display: block;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;">
				  <input style="border:2px dotted #00f;background:#ff0000;" type="checkbox" name="remember" <?php echo $set_remember?>>Remember Me
			</div>
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
						<small class="text-muted">Forgot Password?</small>  
			  		</svg>
					
			  		<br><br>
					  <a class="up" style="text-decoration: none;" href="Register.php">Register</a>
			  	<div style="color:red;font-weight:500;display: block;text-align: center; margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;" class="text-center text-danger" >
				  <P><?php echo $msg ?></P>
				<?php $msg = ''; ?>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="text-center">
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</div>
	<div style="color:red;font-weight:500;display: block;text-align: center; margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;">
				
			</div>
	</form>
	

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>