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
	</style>
	<title>First Page</title>
</head>
<body>
	<font class="fontstyle">
		<?php require_once "./navbar.php" ?>
		<div class="container">
			<?php
				$h = fopen("students.csv", "r");

				$lst_of_students = []; //To store CSV in form of multidimensional array

				while (! feof($h)) {
					$lst_of_students[] = fgetcsv($h);
				}
				fclose($h); 
			?>
			<p style="text-align: center; font-size: 30px;">Student Details</p>
			<table class="table table-borderless table-hover table-dark">
    			<thead>
				    <tr style="text-align: left;">
				    	<th scope="col">Sl. No</th>
				     	<th scope="col">USN</th>
				        <th scope="col">Name</th>
				        <th scope="col">Age</th>
				        <th scope="col">Mail id</th>
				        <th scope="col">Phone</th>
				    </tr>
    			</thead>
  				<tbody>
  					<?php 
  						foreach ($lst_of_students as $key1 => $val1) {	
				    	if(is_array($val1)){
				    ?>
				    <tr>
				    	<td style="text-align: left"><?php echo $key1+1;?></td>
				    	<?php 
			    			foreach ($val1 as $key2 => $val2) {
			    				if($key2<1)continue;
				    	?>
					    <td style="text-align: left;"><?php echo $val2;?></td>
					    <?php 
						}
						}
					    ?>
				    </tr>
				    <?php 
					}
				    ?>
		        </tbody>
			</table>
		</div>
	</font>
</body>
</html

