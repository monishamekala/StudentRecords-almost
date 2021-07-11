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
			margin-top: 80px;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: white;
			text-align: center;
		}
		.col-4{
			padding-top: 4%;
			padding-bottom: 4%;
			border-radius: 25px;
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.form-group{
			padding-bottom: 10px;
		}
		.btn-outline-own1{
	    	border-color: #fcecdd;
	    	color: #fcecdd;

	    }
	    .btn-outline-own1:hover{
	    	background-color: #fcecdd;
	    	color: #126e82;
	    }
	    .btnf{
	  		width: 60%;
	  	}
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<div class="row justify-content-around">
			    <div class="w-50 p-3" style="background-image:linear-gradient(#248da3, #2c4b52);">
			    	<form action="./updatecsv.php" method="post">
			    		<h2 style = "padding-top: 40px; padding-bottom: 20px;">
			    		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
					    <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
					    </svg> Enter details</h2>
			    		<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">USN</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="floatingInput" name="usn" placeholder="University no" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputPassword" name="name" placeholder="Name of student" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">DOB</label>
						    <div class="col-sm-10">
						      <input type="date" class="form-control" id="inputPassword" name="age"
						      placeholder="Age of student" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">Mail id</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputPassword" name="mail" placeholder="Mail id" required>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label" style="font-size: 20px;">Phone</label>
						    <div class="col-sm-10">
						      <input type="tel" class="form-control" id="inputPassword" name="phn" placeholder="Phone No." required>
						    </div>
						</div>
						<div class="form-group row">
						    <div class="col" style="padding-left: 150px; padding-right: 150px;">
						    	<button type="submit" class="btn btn-outline-own1 btnf" style="padding: 10px;">Update</button>
						    </div>
						</div>
			    	</form>
			    </div>
    		</div>
		</div>
	</font>
</body>
</html

