<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

	<!--------------------Bootstrap CSS------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-------------------- W3 CSS ------------------------>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-------------------Google fonts--------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<!-------------------W3 animations-------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		.container{
			margin-top: 90px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: #fbe0c4;
		}
		.on-it{
			height: 80%;
		}
		.about-first{
			text-align: center;
			vertical-align: middle;
			margin: auto;
			padding-top: 80px;
		}
		.w3-animate-top{
	    	animation-duration: 1.5s;
	    }
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="on-it w3-container w3-center w3-animate-top" style="background-image: linear-gradient(#248da3, #2c4b52);">
	    		<div class="about-first">
	    			<p style="font-size: 30px;">Student Records
	    				<br>(Dayananda Sagar Academy of Technology and Management)
	    			</p>
	    			<p style="font-size: 23px;">Team:</p>
	    			<p style="font-size: 18px;">Monisha M : 1DT18IS056</p>
	    			<p style="font-size: 18px;">Harshitha K M : 1DT18IS035</p>
		    	</div>
	    	</div>
		</div>
	</font>
</body>
</html

