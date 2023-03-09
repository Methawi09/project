<?php
include 'condb.php';
$pid = $_POST['pattern_id '];
$patname = $_POST['p_name'];
$type_id = $_POST['typeID'];
$image = $_POST['txtimg'];

if (is_uploaded_file($_FILES['ppic']['tmp_name'],)) {
    $new_image_name = ($_FILES['ppic']['name']);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['ppic']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "$image";
    }



$sql = "UPDATE pattern set 	
pattern_name ='$patname',
type_id = '$type_id',
image = '$new_image_name
WHERE pattern_id= '$pattern_id '";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_pattern.php';</script>";
}else{
    echo "<script>alert('ไม่สามารแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);

?>
