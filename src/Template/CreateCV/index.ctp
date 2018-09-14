<html>
	<head>
	<title>Create CV</title>
	<link rel="stylesheet" href="webroot\css\bootstrap.min.css">
	<script src="webroot\js\jquery-3.3.1.min.js"></script>
	<script src="webroot\ckeditor\ckeditor.js"></script>
	<script src="webroot\js\bootstrap.min.js"></script>
	</head>
	<body>
		<h1>Hello world</h1>
		<ul>
			<li>Se esta probando</li>
			<li>que elementos de html</li>
			<li>funcionen sin la vineta de html</li>
		</ul>
		<button type="button" class="btn">Basic</button>
		<button type="button" class="btn btn-default">Default</button>
		<button type="button" class="btn btn-primary">Primary</button>
		<button type="button" class="btn btn-success">Success</button>
		<button type="button" class="btn btn-info">Info</button>
		<button type="button" class="btn btn-warning">Warning</button>
		<button type="button" class="btn btn-danger">Danger</button>
		<button type="button" class="btn btn-link">Link</button>
		<br><br>
		
		
			<textarea name="editorName" placeholder="Nombre completo"></textarea> <!--class="ckeditor"-->
		
		
		<form action="" method="post">
			<textarea name="editor" ></textarea> <!--class="ckeditor"-->
			<input type="submit">
		</form>
	</body>
</html>

<?php

	$text = "";
	if(isset($_POST['editor']))
	{
		$text = $_POST['editor'];
		//Connect to db
		//host, username, password, database name
		$con = mysqli_connect('titanic', 'eb41188', 'eb41188', 'ci2413_eb41188') or die("ERROR IN CONNECTION");
		$sql = "INSERT INTO users (name) 
				VALUES ('$text')";
		//Insert the data
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
?>

