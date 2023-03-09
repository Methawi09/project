<?php
include 'condb.php';
$ids=$_GET['id'];
$sql = "DELETE FROM pattern WHERE pattern_id='$ids'";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_pattern.php';</script>";
}else{
    echo "Error : ". $sql . "<br>" . mysqli_errno($conn);
}
mysqli_close($conn);


?>
