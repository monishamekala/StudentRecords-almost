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
			margin-top: 7%;
			background-image: linear-gradient(#248da3, #2c4b52);
			padding-top: 4%;
			padding-bottom: 4%;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: white;
			font-size: 16px;
		}
		.algn{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.w3-animate-top{
			animation-duration: 2s;
		}
		.row{
			margin-right: 10%;
			margin-left: 10%;
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
		<div class="container w3-container w3-center w3-animate-top">
    		<h1 style="color: white; text-align: center;">
	    		<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
				    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/>
				</svg>
			Upload Your Assignment</h1>
			<font style="text-align: left;">
				<form action="./assgnUpload.php" method="post" enctype="multipart/form-data">
					<div class="row" style="padding-bottom: 20px;">
						<div class="col">
							<label>Name</label>
		                	<input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" required>
						</div>
						<div class="col">
							<label>USN</label>
		                	<input type="text" class="form-control" id="usn" placeholder="Enter USN" name="usn" required>
						</div>
					</div>
					<div class="row" style="padding-bottom: 20px;">
						<div class="col">
							<label>Assignment No.</label>
		                	<select id="AssgNo" name="AssgNo" class="form-control">
		                		<option></option>
                                <option value="1">i</option>
                                <option value="2">ii</option>
                                <option value="3">iii</option>
                            </select>
						</div>
						<div class="col">
							<label>Subject</label>
		                	<select id="sub" name="sub" class="form-control">
		                		<option></option>
                                <option value="1">File Structures</option>
                                <option value="2">Web Technology</option>
                                <option value="3">Software Testing</option>
                            </select>
						</div>
					</div>
					<div class="row" style="padding-bottom: 20px;">
						<div class="col">
							<label>Upload file<small> (File name: USN_Name)</small></label>
    						<input id="formFileLg" type="file" accept=".pdf" name="file" required>
						</div>
						<div class="col"></div>
					</div>
					<div class="row" style="padding-bottom: 20px;">
						<div class="col">
							<button type="submit" class="btn btn-outline-own1">Upload</button>
						</div>
						<div class="col"></div>
					</div>
				</form>
			</font>
    	</div>
	</font>
</body>
</html

