<?php

$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "woke";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
	header("location:error.php");
	exit;
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_filename = "";
$bool_hasnewupload = false;
if (file_exists($_FILES['fiupload']['tmp_name']) || is_uploaded_file($_FILES['fiupload']['tmp_name'])) {
	$bool_hasnewupload = true;
	$str_filename = $_FILES['fiupload']['name'];
}



//$str_sql = "insert into user_tb(us_name,us_surname) values('name','surname')";

$str_sql = "insert into woke(fname,lname,pic_us,age) values(";
$str_sql .= "'" . $_POST['txtname'] . "',";
$str_sql .= "'" . $_POST['txtsurname'] . "',";
$str_sql .= "'" . $str_filename . "',";
$str_sql .= "'" . $_POST['txtage'] . "')";

if (mysqli_query($obj_con, $str_sql)) {
	//echo "Save OK !";

	if ($bool_hasnewupload) {
		$str_uploadfile = "images/pics/" . $str_filename;
		//echo $str_uploadfile;

		if (move_uploaded_file($_FILES['fiupload']['tmp_name'], $str_uploadfile)) {
			echo "Upload OK";
		} else {
			echo "Upload Error";
		}
	}
	header("location:add.php");
	exit;
} else {
	echo "Save Error ! : " . $str_sql;
}
