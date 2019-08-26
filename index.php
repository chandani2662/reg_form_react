<?php
	include ("connection.php");
		if (isset($_POST["signup"])){
				$username = $_POST['username'];
   				$email =$_POST['email'];
   				$password =$_POST['password'];
   				$confirm_password =$_POST['confirm_password'];
   				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$gender = $_POST['gender'];
				$address = $_POST['address'];
				$tel = $_POST['tel'];
				$status = $_POST['status'];
				$skills = implode(',',$_POST['skills']);
				$hobbies = $_POST['hobbies'];
				$self = $_POST['self'];
				$programmer = $_POST['programmer'];
				$news = $_POST['news'];
				$agree = $_POST['agree'];
   				$id=0;

   	$query ="INSERT INTO infos (username,email,password,confirm_password,firstname,lastname,gender,address,tel,status,skills,hobbies,self,programmer,news,agree)VALUES ('$username','$email','$password','$confirm_password','$firstname','$lastname','$gender','$address','$tel','$status','$skills','$hobbies','$self','$programmer','$news','$agree')";
   	if(mysqli_query($db, $query)) {
      echo 'Sign up  ';
   } else {
      echo 'error:'.$query.'   check: '.$db->error;
   }
   // check connection
   if ($db->connect_error){
      die("connection failed:" . $db->connect_error);
   }
   else {
      echo "successfully done.";
   }

			}
?>

<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css" />

<body>
	<div class="container">
		<div class="main">
				<div class="header">
					<h1> sign up</h1>
				</div>
				<form class="sub_main" method="post" action="index.php">
					<div class="form-group">
						<h4>Name</h4>
						<input type="text" name="username">
		 			</div>
					<div class="form-group">
						<h4>Email</h4>
						<input type="email" name="email">
					</div>
					<div class="form-group">
						<h4>Password</h4>
						<input type="password" name="password">
					</div>
					<div class="form-group">
						<h4>Retype Password</h4>
						<input type="password" name="confirm_password">
					</div>
					<div class="form-group">
						<h4>First Name</h4>
						<input type="firstname" name="firstname">
					</div>
					<div class="form-group">
						<h4>Last Name</h4>
						<input type="lastname" name="lastname">
					</div>
					<div class="for-group">
						<h4>Gender:</h4>
				    		<input type="radio" name="gender" value="female"/>Female  
							<input type="radio" name="gender" value="male"/>Male
				    		<input type="radio" name="gender" value="other"/>Other
				    </div>
					<div class="form-group">
						<h4>Address</h4>
						<input type="address" name="address">
					</div>
					<div class="form-group">
					  	<h4>Contact No: </h4>
						<input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="123-456-7890">
					</div>
					<div class="for-group">
						<h4>Married status:</h4>
				    		<input type="radio" name="status" value="single"/>Single  
							<input type="radio" name="status" value="married"/>Married
				    		<input type="radio" name="status" value="other"/>Other
				    </div>
				    
				    <div class="for-group">
				    <h4>Skills: </h4>
				    <p>
					<input type="checkbox" value="html" name="skills[]">HTML
					
					<input type="checkbox" value="css" name="skills[]">CSS
					
					<input type="checkbox" value="java" name="skills[]">Java<br>	
					
					<input type="checkbox" value="rube" name="skills[]">Rube
					
					<input type="checkbox" value="php" name="skills[]">PHP

					<input type="checkbox" value="sql" name="skills[]">SQL<br>

					<input type="checkbox" value="python" name="skills[]">Python

					<input type="checkbox" value="jquery" name="skills[]">JQuery

					<input type="checkbox" value="javascript" name="skills[]">Java Script</p>

					</div>

					<div class="form-group">
						<h4>Hobbies</h4>
						<input type="hobbies" name="hobbies">
					</div>
					<div class="form-group">
						<h4>Talk Your Self </h4>
						<input type="self" name="self">
					</div>
					<div class="form-group">
						<h4>What you think you can do as a programmer: </h4>
						<input type="programmer" name="programmer">
					</div>
					<div class="for-group">
						<h5><input type="checkbox" name="news">
							I want to receive news and special offers</h5>
					</div>
					
					<div class="for-group">
						<h5><input type="checkbox" name="agree">
							I agree with the <a href="#">term and conditions</a></h5>
					</div>


					<div class="form-group">
  	  					<button type="submit" name="signup">Sign up</button>
					</div>
				</form>					
			</div>
			
		
	</div>
</body>
</html>