<?php

	$str_hostname = "localhost";
	$str_username = "root";
	$str_password = "";
	$str_dbname = "companyprofect";

	$obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);

	if(!$obj_con) {
		header("location:error.php");
		exit();
	}
	
	mysqli_query($obj_con,"SET NAMES UTF8");

	$str_sql = "select * from travel";
	$obj_rs = mysqli_query($obj_con,$str_sql);

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php while( $obj_row = mysqli_fetch_array($obj_rs) ) { ?>
			<div>
				<?= $obj_row['place'] ?> 
				<span style="color: #F00"><?= $obj_row['place'] ?></span>
			</div>
		<?php } ?>

	</body>
</html>

