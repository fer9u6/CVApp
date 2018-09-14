<?php 
	session_start();
	$firstname = "";
	$lastname = "";
	$email = "";
	$errors = array();
	//Connect to db
	//host, username, password, database name
	$con = mysqli_connect('titanic', 'eb41188', 'eb41188', 'ci2413_eb41188') or die("ERROR IN CONNECTION");
	if(isset($_POST['register']))
	{
		//Save info in variables
		$firstname = mysqli_real_escape_string($_POST['firstname']);
		$lastname = mysqli_real_escape_string($_POST['lastname']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password_1 = mysqli_real_escape_string($_POST['password_1']);
		$password_2 = mysqli_real_escape_string($_POST['password_2']);
		
		//Search for errors
		if(empty($firstname))
		{
			
			array_push($errors, "First name is required");
		}
		if(empty($lastname))
		{
			array_push($errors, "Last name is required");
		}
		if(empty($email))
		{
			array_push($errors, "Email is required");
		}
		if(empty($password_1))
		{
			array_push($errors, "Password is required");
		}
		if($password_1 != $password_2)
		{
			array_push($errors, "The passwords do not match");
		}
		//if there are no errors, save user in database
		if(count($errors) == 0)
		{
			$password = md5($password_1); //Encrypt password before storing
			$sql = "INSERT INTO users (name, email, lastname, password) 
				VALUES ('$firstname', '$email', '$lastname', '$password')";
			$query = mysqli_query($con, $sql);
			if($query)
			{
				echo "INFO INSERTED";
			}
			else
			{
				echo "ERROR WHILE INSERTING";
			}
		}
		
	}
?>

<html>
	<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="webroot\css\bootstrap.min.css">
	<script src="webroot\js\jquery-3.3.1.min.js"></script>
	<script src="webroot\ckeditor\ckeditor.js"></script>
	<script src="webroot\js\bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Sign Up</h1>
			</div>
			
			<?php if(count($errors) > 0): ?>
			<div class="error">
				<?php foreach($errors as $error):?>
					 <p><?php echo $error; ?></p> 
				<?php endforeach?>
			</div>
			<?php endif ?>
			
			<form method="post" action="index.ctp">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>First name</h6></label>
						<div class="input-group mb-3">
							<input type="text" name="firstname" class="form-control" placeholder="..." aria-label="Firstname">
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Last name</h6></label>
						<div class="input-group mb-3">
							<input type="text" name="lastname" class="form-control" placeholder="..." aria-label="Lastname">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Email</h6></label>
						<div class="input-group mb-3">
							<input type="text" name="email" class="form-control" placeholder="..." aria-label="Email">
						</div>
					</div>
					
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Password</h6></label>
						<div class="input-group mb-3">
							<input type="password" name="password_1" class="form-control" placeholder="..." aria-label="Password">
						</div>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Already have an acount? <a href="http://www.google.com">Log In</a></h6></label>
					</div>
					
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Confirm password</h6></label>
						<div class="input-group mb-3">
							<input type="password" name="password_2" class="form-control" placeholder="..." aria-label="Confirmpassword">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<button type="button" class="btn btn-info btn-block">Return</button>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<button type="submit" name="register" class="btn btn-block">Confirm</button>
					</div>
				</div>
			</form>
			
		</div>
	</body>
</html>