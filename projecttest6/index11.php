<?php

$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "companyprofect";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
	header("location:error.php");
	exit();
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_sql = "select * from travel";
$obj_rs = mysqli_query($obj_con, $str_sql);

?>
<!DOCTYPE html>
<html>

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

<head>
	<title></title>
</head>

<body>

	<?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>
		<div >
			 <div class=" p3 cc1 b1"> ชื่อสถานที่ : <?= $obj_row['place'] ?></div>
			 <div class=" p3 cc2 b1"> ประเภท : <?= $obj_row['type'] ?></div>
			 <div class=" p3 cc3 bbrr b1"> จังหวัด : <?= $obj_row['province'] ?></div>
			 <br>
			 
		</div>
	<?php } ?>
	

</body>

</html>