<?php
include 'condb.php';
$id= $_POST['tid'];
$name = $_POST['tname'];

$sql = "UPDATE fabrictype set type_name ='$name' WHERE type_id= '$id'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_type.php';</script>";
}else{
    echo "<script>alert('ไม่สามารแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);

?>
