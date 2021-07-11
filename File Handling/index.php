<DOCTYPE!>
<!DOCTYPE html>
<html>
<head>

	<!--------------------Bootstrap CSS------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-------------------- W3 CSS ------------------------>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-------------------- Icons ------------------------->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-------------------Google fonts--------------------->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

	<!-------------------W3 animations-------------------->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		.first-inner-banner{
			padding-bottom: 90px;
			padding-right: 0;
			width: 100%;
			height: 80%;
			background-image: url(https://images.unsplash.com/photo-1512799545738-0625ef92a288?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
			background-position: left;
			background-repeat: no-repeat; 
		}
		.on-it{
			width: 55%;
			height: 80%;
			margin-top: 100px;
			float: right;
		}
		.about-first{
			text-align: center;
			vertical-align: middle;
			margin: auto;
		}
		.about-floating {  
	        animation-name: floating;
	        animation-duration: 3s;
	        animation-iteration-count: infinite;
	        animation-timing-function: ease-in-out;
	    }
	    @keyframes floating {
	        0% { transform: translate(0,  0px); }
	        50%  { transform: translate(0, 10px); }
	        100%   { transform: translate(0, -0px); }    
	    }
		.w3-animate-left{
	    	animation-duration: 2s;
	    }
	    .w3-animate-right{
	    	animation-duration: 3s;
	    }
		.container{
			margin-top: 135px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: white;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			border-radius: 25px;
		}
		.btn-outline-own{
	    	border-color: #126e82;
	    	color: #126e82;
	    }
	    .btn-outline-own1{
	    	border-color: #fcecdd;
	    	color: #fcecdd;
	    }
	    .btn-outline-own:hover{
	    	background-color: #126e82;
	    	color: #fcecdd;
	    }
	    .btn-outline-own1:hover{
	    	background-color: #fcecdd;
	    	color: #126e82;
	    }
	    .btnf{
	  		width: 50%;
	  	}

	  	.img-hover-zoom {
		  height: 300px; 
		  overflow: hidden; 
		}

		.img-hover-zoom img {
		  transition: transform .5s ease;
		}

		.img-hover-zoom:hover img {
		  transform: scale(1.2);
		}
	</style>
	<title>Student Records</title>
	<link rel = "icon" href = "./images/Logo2.png" type = "image/x-icon">
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<section class="first-inner-banner w3-container w3-center w3-animate-left" style="margin-top: 70px; height: 450px">
				<div class="on-it w3-container w3-center w3-animate-right" style="background-color:  #126e82;">
					<div class="about-first" style="padding-top: 60px;">
						<p style="font-size: 30px;">Student Records</p>
						<p><a href="./index.php">Home</a> - <a href="./aboutus.php">About</a></p>
					</div>
				</div>
	    	</section>
			<div class="row justify-content-around">
				<div class="col-4">
					<div class="about-floating img-hover-zoom">
						<img src="./images/i4.png" width = "314px" height="320px">
					</div>
				</div>
				<div class="col-4" style="padding-top: 8%;">
					<div class="about-first">
						<font style="color: black; font-size: 30px;">
							<p style="padding-bottom: 0;"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
	    					<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	    					<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
	    					<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
	    					</svg>
							<br>For Students<br><small style="font-size: 15px;">You can view your details and upload assignment here</small></p>
							<a href="./student.php" type="button" class="btn btn-outline-own btnf"><i class="material-icons">group</i><br>Student Details</a>
							<p></p>
							<a href="./assgn.php" type="button" class="btn btn-outline-own btnf">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
				    			<path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
								</svg><br>
							Upload Assignment</a>
						</font>
					</div>
				</div>
			</div>
		  	<p></p>
			<div class="row justify-content-around" style="position: sticky;">
				<div class="col-4" style="padding-top: 8%;">
					<div class="about-first">
						<font style="color: black; font-size: 30px;">
						<p><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
    					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    					</svg><br>For Faculty</p>
						</font>
						<p></p>
						<div style="background-image:linear-gradient(#248da3, #2c4b52);padding: 20px 35px 20px 35px; margin-top: 10%;" class="container">
							<p></p>
							<form action="./TeacherConnect.php" method="post">
								<div class="form-floating mb-3" style="padding-bottom: 5%;">
									<input type="text" class="form-control" id="floatingInput" placeholder="Username" name="uname" required>
								</div>
								<div class="form-floating">
									<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passwrd" required>
								</div>
								<div class="form-floating" style="margin-top: 30px;">
									<button type="submit" class="btn btn-outline-own1 btnf">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 12%; padding-left: 5%;">
					<div class="about-floating img-hover-zoom">
						<img src="./images/i5.png" width = "314px" height="320px">
					</div>
				</div>
			</div>
		</div>
	</font>
</body>
</html

