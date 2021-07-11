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

	<style>
		.container{
			margin-top: 10%;
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
			<?php
				$h = fopen("students.csv", "r");

				$lst_of_students = []; //To store CSV in form of multidimensional array

				while (! feof($h)) {
					$lst_of_students[] = fgetcsv($h);
				}
				fclose($h);

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
				$search_path_pr = searchForId($USN, $lst_of_students_pr);

				if($search_path_pr == -1){
				?>

					<div class="container">
				    	<p style="text-align: left; font-size: 20px; color: rgb(0,0,0);">
					    	<?php echo "USN: ".$USN." Not Found";?>
						</p>
		    		</div>

		    	<?php
				}
				else{
					$sl_no = $lst_of_students_pr[$search_path_pr][0];
					$search_path = searchForId($sl_no, $lst_of_students);
					
					unset($lst_of_students[$search_path]);
					$lst_of_students = array_filter($lst_of_students);

					$h = fopen("students.csv", "w");
					foreach ($lst_of_students as $rows) {
					    fputcsv($h, (array) $rows);
					}    
					fclose($h);

					unset($lst_of_students_pr[$search_path_pr]);
					$lst_of_students_pr = array_filter($lst_of_students_pr);

					$p = fopen("Pindex.csv", "w");
					foreach ($lst_of_students_pr as $rows) {
					    fputcsv($p, (array) $rows);
					}    
					fclose($p);

					?>
					<div class="container">
				    	<p style="text-align: left; font-size: 20px; color: rgb(0,0,0);">
					    	<?php echo "USN: ".$USN." Successfully Deleted";?>
						</p>
		    		</div>
		    		<?php
				}
				?>
		</div>
	</font>
</body>
</html

