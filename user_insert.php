<?php
include("includes/connection.php");
if (isset($_POST['sign_up'])){
			global $con;
			$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
			$lastname =  mysqli_real_escape_string($con,$_POST['lastname']);
			$mail = mysqli_real_escape_string($con,$_POST['mail']);
			$password = mysqli_real_escape_string($con,$_POST['password']);
			$birthday = mysqli_real_escape_string($con,$_POST['birthday']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$date = date('d-m-y');
			$status = "Set a status!";
			$posts = "Share a post!";
			
			$get_email = "select * from users where user_email='$mail'";
			$run_email = mysqli_query($con,$get_email);
			$check = mysqli_num_rows($run_email);
			
			if ($check == 1){
				echo"<script>alert('You have registered through this email already!')</script>";
				exit();			
			}
			
			if (strlen($password)<8){
				echo"<script>alert('Your password must be minimum of 8 characters!')</script>";
				exit();
			}
			
			else{
				$insert = "insert into users(firstname,lastname,user_email,user_pass,user_bday,user_image,user_gender,register_date,last_login,status,posts)
				values('$firstname','$lastname','$mail','$password','$birthday','user/user_images/default.jpg','$gender','$date','$date','$status','$posts')";
			
				$run_insert = mysqli_query($con,$insert);
					
					if($run_insert){
						$_SESSION['user_email']=$mail;
						echo"<script>alert('You have successfully registered!')</script>";
						echo"<script>window.open('home.php','_self')</script>";
					}
			
			
			}
			
			
		}
		
		
		
?>	