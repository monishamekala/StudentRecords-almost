<?php
	$USN = filter_input(INPUT_POST, 'usn');
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
				//Raw data
				$h = fopen("students.csv", "r");

				$lst_of_students = []; //To store CSV in form of multidimensional array

				while (! feof($h)) {
					$lst_of_students[] = fgetcsv($h);
				}
				fclose($h);
				
				//Index file
				$p = fopen("Pindex.csv", "r");

				$lst_of_students_pr = []; 

				while (! feof($p)) {
					$lst_of_students_pr[] = fgetcsv($p);
				}
				fclose($p);

				//Function to search for Sl.no
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
				// To search for USN in primary index
				$search_path_pr = searchForId($USN, $lst_of_students_pr);
				
				if($search_path_pr !== -1){
					$sl_no = $lst_of_students_pr[$search_path_pr][0];
					$search_path = searchForId($sl_no, $lst_of_students);
				?>
					<table class="table table-borderless table-hover table-dark" style="background-color:  #126e82">
			    			<thead>
							    <tr>
							     	<th scope="col">USN</th>
							        <th scope="col">Name</th>
							        <th scope="col">Date Of Birth</th>
							        <th scope="col">Mail id</th>
							        <th scope="col">Phone</th>
							    </tr>
			    			</thead>
			  				<tbody>
							    <tr>
							    	<td><?php echo $lst_of_students[$search_path][1]; ?></td>
									<td><?php echo $lst_of_students[$search_path][2]; ?></td>
									<td><?php echo $lst_of_students[$search_path][3]; ?></td>
									<td><?php echo $lst_of_students[$search_path][4]; ?></td>
									<td><?php echo $lst_of_students[$search_path][5]; ?></td>
							    </tr>
					        </tbody>
						</table>
<!-- 		    		</div>
 -->
		    	<?php
				}
				else{
				?>
				    <div class = "container w3-container w3-center w3-animate-zoom" style="margin-top: 5%;width: 50%;">
                    	<p style="font-size:25px; color:red; text-align: center;"><i class="fa fa-times-circle" style="color: red; font-size:60px;"></i> <br>Invalid Universty Number</p>
		    		</div>
				<?php
				}
				?>
		</div>
	</font>
</body>
</html
