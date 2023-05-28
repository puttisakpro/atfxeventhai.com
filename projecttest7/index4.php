<link rel="stylesheet" type="text/css" href="re.css">
<link rel="stylesheet" type="text/css" href="table.css">
<?php

$str_hostname = "localhost";
$str_username = "root";
$str_password = "";
$str_dbname = "warn";

$obj_con = mysqli_connect($str_hostname, $str_username, $str_password, $str_dbname);

if (!$obj_con) {
    header("location:error.php");
    exit();
}

mysqli_query($obj_con, "SET NAMES UTF8");

$str_sql = "select * from warn2";
$obj_rs = mysqli_query($obj_con, $str_sql);

?>

<body>
    <table style="  margin: 0px auto">
        <tr>
            <th></th>
            <th>ประเภทคำถาม</th>
            <th>เรื่อง/ประเด็น</th>
            <th>ชื่อจริง</th>
            <th>นามสกุล</th>
            <th>สถานที่เกิดเหตุ</th>
            <th>เมล</th>
            <th>โทรศัพท์</th>
            <th>รายละเอียด</th>
        
        </tr>
        <?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>
            <tr>
                <td class="table tr"> <?= $obj_row['questiontype'] ?> </td>
                <td> <?= $obj_row['subject'] ?> </td>
                <td> <?= $obj_row['fname'] ?> </td>
                <td> <?= $obj_row['lname'] ?> </td>
                <td> <?= $obj_row['crimescene'] ?> </td>
                <td> <?= $obj_row['mail'] ?> </td>
                <td> <?= $obj_row['telephone'] ?> </td>
                <td> <?= $obj_row['details'] ?> </td>
                
            </tr>
        <?php } ?>
    </table>

</body>

</html>