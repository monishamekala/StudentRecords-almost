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
			margin-top: 10%;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			border-radius: 25px;
			background-color: black;
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.w3-animate-zoom{
			animation-duration: 2s;
		}
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="row justify-content-around w3-container w3-center w3-animate-zoom">
			    <div class="col-4">
			    	<form method="post" action="./deletecsv.php">
			    		<h1 style="color: white; text-align: center;">Enter the USN to delete</h1>
			    		<div class="form-floating mb-3" style="padding-bottom: 5%;">
					    	<input type="text" class="form-control" id="floatingInput" placeholder="USN" name="usn" required>
					    	<small style="color: white; font-size: 13px;">Use uppercase letters only.</small>
						</div>
						<div class="form-floating" style="margin-top: 30px;">
							<button type="submit" class="btn btn-outline-light">Submit</button>
						</div>
			    	</form>
			    </div>
    		</div>
		</div>
	</font>
</body>
</html

