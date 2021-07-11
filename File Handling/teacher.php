<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

	<!--------------------Bootstrap CSS------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-------------------Google fonts--------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<!-------------------W3 animations-------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		.container{
			margin-top: 100px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
		}
		.col-5{
			padding-top: 4%;
			padding-bottom: 4%;
			background-image:linear-gradient(#248da3, #2c4b52);
			text-align: center;
			padding-left: 40px;
			padding-right: 40px;
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="row justify-content-around">
			    <div class="col-5">
		    		<h2 style="color: white; text-align: center;">What you want to do
		    		<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-question-square-fill" viewBox="0 0 16 16">
    				<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
					</svg> </h2>
		    		<div class="list-group" style="padding-top: 20px;">
					    <a href="add_stu.php" class="list-group-item list-group-item-action">Add student details</a>
					    <p></p>
    					<a href="./update.php" class="list-group-item list-group-item-action">Update student details</a>
    					<!-- ./update.php -->
    					<p></p>
    					<a href="./deleteStu.php" class="list-group-item list-group-item-action">Delete student details</a>
    					<p></p>
    					<a href="./student.php" class="list-group-item list-group-item-action">Search student details</a>
    					<p></p>
    					<a href="./view_stu.php" class="list-group-item list-group-item-action">View Student details</a>
    					<p></p>
  						<a href="./index.php" class="list-group-item list-group-item-action">Back</a>
					</div>
			    </div>
    		</div>
		</div>
	</font>
</body>
</html

