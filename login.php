<?php
	
	include("includes/connection.php");
	if(isset($_POST['login'])){
		global $con;
		$mail = mysqli_real_escape_string($con,$_POST['mail']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		
		$get_user = "select * from users where user_email='$mail' and user_pass='$password'";
		$run_user = mysqli_query($con,$get_user);
		$check = mysqli_num_rows($run_user);
		
		if($check==1){
			$_SESSION['user_email']=$mail;
			echo "<script>window.open('home.php','_self')</script>";
				
		}
			
		else{
			echo "<script>alert('Email or Password is incorrect!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
			
		}	
			
			
	}



?>