<?php
include 'condb.php';
$tname = $_POST['tname'];

$sql = "INSERT INTO fabrictype(type_name) VALUES('$tname')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_type.php';</script>";
}else{
    echo "<script>alert('ไม่สามารบันทกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>
