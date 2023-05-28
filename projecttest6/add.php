<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<form name="frmdata" method="post" action="r_add.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>ชื่อ</td>
				<td><input type="text" name="txtname"></td>
			</tr>
			<tr>
				<td>นามสกุล</td>
				<td><input type="text" name="txtsurname"></td>
			</tr>
			<tr>
				<td>อายุ</td>
				<td><input type="text" name="txtage"></td>
			</tr>
			<tr>
				<td>รูป</td>
				<td><input type="file" name="fiupload"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsave"></td>
			</tr>
		</table>
	</form>

</body>

</html>