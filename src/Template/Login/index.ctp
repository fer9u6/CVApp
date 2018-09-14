<html>
	<head>
	<title>Log In</title>
	<link rel="stylesheet" href="webroot\css\bootstrap.min.css">
	<script src="webroot\js\jquery-3.3.1.min.js"></script>
	<script src="webroot\ckeditor\ckeditor.js"></script>
	<script src="webroot\js\bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Log In</h1>
			</div>
			
			<form method="post" action="index.ctp">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Email</h6></label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="..." aria-label="Email" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Password</h6></label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="..." aria-label="Password" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<label for="basic-url"><h6>Don't have an acount? <a href="http://www.google.com">Sign Up</a></h6></label>
					</div>
				</div>
				
				<br><br><br>
				
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
						<button type="button" class="btn btn-info btn-block">Return</button>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<button type="submit" name="login" class="btn btn-block">Confirm</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>