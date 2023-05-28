<link rel="stylesheet" type="text/css" href="re.css">
<link rel="stylesheet" type="text/css" href="table.css">
<?php

$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "health";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
    header("location:error.php");
    exit();
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_sql = "SELECT * from person";
$obj_rs = mysqli_query($obj_con, $str_sql);

?>

<body>
    <table style="  margin: 0px auto">
        <tr>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อายุ</th>
            <th>เพศ</th>
            <th>ตำแหน่ง</th>
            <th>น้ำหนัก</th>
            <th>ส่วนสูง</th>
            <th>รูปภาพ</th>
        </tr>
        <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>

            <tr>

                <td> <?= $obj_row['id'] ?> </td>
                <td> <?= $obj_row['fname'] ?> </td>
                <td> <?= $obj_row['lname'] ?> </td>
                <td> <?= $obj_row['gender'] ?> </td>
                <td> <?= $obj_row['age'] ?> </td>
                <td> <?= $obj_row['position'] ?> </td>
                <td> <?= $obj_row['weight'] ?> </td>
                <td> <?= $obj_row['height'] ?> </td>
                <td> <img src="images/<?= $obj_row['photo'] ?>" /> </td>

            </tr>
        <?php } ?>
    </table>

</body>

</html>