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
			text-align: center;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			background-color: rgba(18, 110, 130,0.96);";
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.w3-animate-right{
			animation-duration: 2s;
		}
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="row justify-content-around">
			    <div class="col-4" style="animation-duration: 2s; background-image: linear-gradient(#248da3, #2c4b52);">
			    	<form action="./studentinfo.php" method="post">
			    		<h1 style="color: white; text-align: center;padding-top: 10%; padding-bottom: 5%;">
			    		<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
    					<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
						</svg> Enter USN</h1>
			    		<p></p>
			    		<div class="form-floating mb-3" style="padding-bottom: 5%; margin-left: 15px;margin-right: 15px;">
					    	<input type="text" class="form-control" id="floatingInput" placeholder="USN" name="usn" required>
					    	<small style="color: white; font-size: 15px;">Use uppercase letters only.</small>
						</div>
						<div class="form-floating" style="margin-top: 30px;">
							<button type="submit" class="btn btn-outline-light">Submit</button>
						</div>
			    	</form>
			    </div>
			    <div class="col-4  w3-container w3-center w3-animate-right" style="background-color: white; animation-duration: 2s;">
			    	<img src="./images/i1.png" width = "314px" height="320px">
			    </div>
    		</div>
		</div>
	</font>
</body>
</html

