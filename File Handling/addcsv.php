<?php
	$USN = filter_input(INPUT_POST, 'usn');
	$NAME = filter_input(INPUT_POST, 'name');
	$Age = filter_input(INPUT_POST, 'age');
	$Mail = filter_input(INPUT_POST, 'mail');
	$Phone = filter_input(INPUT_POST, 'phn');
?>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		.container{
			margin-top: 20%;
		}
		.fontstyle{
			font-family: 'Acme', sans-serif;
			color: white;
			text-align: left;
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

				//To store CSV in form of multidimensional array
				$lst_of_students = [];

				while (! feof($h)) {
					$lst_of_students[] = fgetcsv($h);
				}
				fclose($h);

				$done = false;

				//Checking if the student information is already present

				function searchForId($search_value, $array) {
					foreach ($array as $key1 => $val1) {		
						if(is_array($val1) and count($val1)) {
							foreach ($val1 as $key2 => $val2) {
								if($val2 == $search_value) {
									return $key1;
								}
							}
						}
						elseif($val1 == $search_value) {
							return $key1;
						}
					}
					return -1;				
				}

				$search_path = searchForId($USN, $lst_of_students);

				if($search_path !== -1){
				?>

					<div class="container">
						<div class = "container w3-container w3-center w3-animate-zoom" style="margin-top: 5%;width: 50%;">
                    		<p style="font-size:20px; color:red; text-align: center;"><i class="fa fa-address-card" style="color: red; font-size:60px;"></i> <br>USN: <?php echo $lst_of_students[$search_path][1];?> Already Exists</p>
		    			</div>

						<font style="text-align: left;">
							<table class="table table-borderless table-hover table-dark" style="background-color:  #126e82">
				    			<thead>
								    <tr style="text-align: left;">
								     	<th scope="col">USN</th>
								        <th scope="col">Name</th>
								        <th scope="col">Date Of Birth</th>
								        <th scope="col">Mail id</th>
								        <th scope="col">Phone</th>
								    </tr>
				    			</thead>
				  				<tbody>
								    <tr>
								    	<td style="text-align: left"><?php echo $lst_of_students[$search_path][1];?></td>
									    <td style="text-align: left;"><?php echo $lst_of_students[$search_path][2];?></td>
									    <td style="text-align: left;"><?php echo $lst_of_students[$search_path][3];?></td>
									    <td style="text-align: left;"><?php echo $lst_of_students[$search_path][4];?></td>
									    <td style="text-align: left;"><?php echo $lst_of_students[$search_path][5];?></td>
								    </tr>
						        </tbody>
							</table>
						</font>
					</div>

				<?php
				}
				else{ 
					$lst_of_students_primary = [];
					$i = -2;
					$p = fopen("Pindex.csv", "r");

					while (! feof($p)){
						$lst_of_students_primary[] = fgetcsv($p);
						$i = $i + 1;
					}
					fclose($p);
					$primary_sl_no = $lst_of_students_primary[$i][0];

					// Taking the last row
					$sl_no = $primary_sl_no + 1;

					// Inserting into raw file
					$new_stu = array( array($sl_no, $USN, $NAME, $Age, $Mail, $Phone));
					foreach ($new_stu as $fields) {
						$h = fopen("students.csv", "a");
					    $done = fputcsv($h, $fields);
					    fclose($h);
					}

					// Inserting into primary file
					$new_stu_primary = array( array($sl_no, $USN));
					foreach ($new_stu_primary as $fields) {
						$p = fopen("Pindex.csv", "a");
					    $done = fputcsv($p, $fields);
					    fclose($p);
					}
				}

				if($done == true){ ?>
					<div class = "container" style="background-color: #BDE87F;padding-top: 10px; width: 50%;">
                        <p style="text-align:center; font-size:20px;color: green;"><i class="fa fa-check-circle" style="color: green; font-size:50px;"></i> <br>Successfully Inserted</p>
                    </div>
				
				<?php 
				}
			?>
		</div>
	</font>
</body>
</html

