<?php
$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "woke";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
    header("location:error.php");
    exit();
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_sql = "select * from woke";
$obj_rs = mysqli_query($obj_con, $str_sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>ข้อมูลทั้งหมด</title>

<body>
    <div>
        <div style="float: left;">
            <div style="padding: 20px 150px 30px 20px;"><a href="add.php" style="color: blue;">เพิ่มข้อมูล</a></div>
            <div style="padding:  0px 150px  0px 20px;"><a href="homes1.php" style="color: blue;">ข้อมูลทั้งหมด</a></div>
            <div style="padding:  0px 150px  0px 20px;"><a href="homes2.php" style="color: blue;">เฉพาะเพศชาย</a></div>
            <div style="padding:  0px 150px  0px 20px;"><a href="homes3.php" style="color: blue;">เฉพาะเพศหญิง</a></div>
            <div style="padding: 20px 120px  0px 20px; color: blue;">ชาย</div>
            <div style="padding:  0px 120px  0px 50px;"><a href="homes4.php" style="color: blue;">น้ำหนัก ไม่เกิน 50 </a></div>
            <div style="padding:  0px 150px  30px 50px;"><a href="homes5.php" style="color: blue;">น้ำหนัก 51-90 </a></div>
            <div style="padding: 20px 120px  0px 20px; color: blue;">หญิง</div>
            <div style="padding:  0px 120px  0px 50px;"><a href="homes6.php" style="color: blue;">น้ำหนัก ไม่เกิน 50 </a></div>
            <div style="padding:  0px 120px  0px 50px;"><a href="homes7.php" style="color: blue;">น้ำหนัก 51-90 </a></div>
        </div>
        <div style="float: left; background-color: #c8f0fa; height: 500px; width: 400px;">
            <div style="padding: 20px 0px 30px 0px; font-size: 20px; color:blue; margin: 0px 0px 0px 10px;">ข้อมูลทั้งหมด</div>
            <table style="margin: 0px auto">
                <tr>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อายุ</th>
                    <th>เพศ</th>
                    <th>น้ำหนัก</th>
                    <th>ส่วนสูง</th>
                </tr>
                <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>
                    <tr style=" background-color: white;">
                        <td><?= $obj_row['fname'] ?></td>
                        <td><?= $obj_row['lname'] ?></td>
                        <td><?= $obj_row['age'] ?></td>
                        <td><?= $obj_row['gender'] ?></td>
                        <td><?= $obj_row['weight'] ?></td>
                        <td><?= $obj_row['height'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>