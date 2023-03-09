<?php
include 'condb.php';
$pname = $_POST['p_name'];
$typeID = $_POST['typeID'];

if (is_uploaded_file($_FILES['ppic']['tmp_name'],)) {
    $new_image_name = ($_FILES['ppic']['name']);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['ppic']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

    $sql = "INSERT INTO pattern(pattern_name,type_id,image) 
    VALUES ('$pname','$typeID ','$new_image_name' )";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('บันทกข้อมูลเรียบร้อย');  </script>";
        echo "<script> window.location='show_pattern.php'; </script>";

    }else{
        echo "<script> alert('ไม่สามารบันทกข้อมูล');  </script>";

    }


