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
    <div>
        <table>
            <tr class="cd b3">
                <td class="cd"> ชื่อสถานที่</td>
                <td class="cd"> ประเภท</td>
                <td class="cd"> จังหวัด</td>
                <td class="cd"> lat</td>
                <td class="cd"> lond</td>
                <td class="cd"> pic</td>
            </tr>
            <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>
                <tr>
                  <td> <div class=" p3 ">  <?= $obj_row['place'] ?></div></td>
                  <td> <div class=" p3 "> <?= $obj_row['type'] ?></div> </td>
                  <td> <div class=" p3 ">  <?= $obj_row['province'] ?></div> </td>
                  <td> <div class=" p3 ">   <?= $obj_row['Lat'] ?></div> </td>
                  <td> <div class=" p3 ">   <?= $obj_row['pic'] ?></div> </td>
                 
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>