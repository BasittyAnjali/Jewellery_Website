<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];


		if($username!=='' && $email!='' && $phone!='' && $password!='' && $conpassword!='')
		{
			$sql = "INSERT INTO user(username, email, phone, password, confirm password) VALUES('$username', '$email', '$phone', '$password', '$conpassword')";

			include_once('db.php');

			$qry = mysqli_query($conn, $sql) or die("Data insert error");

			if($qry)
			{
				echo "$username Register Successfully";
			}
		}
		else
		{
			echo "Please Fill all the fields";
		}
	}
?>
