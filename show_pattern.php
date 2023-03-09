<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <title>Pattern Show</title>
</head>

<body>
    <section class="main">
        <div class="btn btn-hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="sidebar">
            <div class="sidebar-top">
                <div class="sb-logo">
                    <img src="https://realbearpro.com/img/logo-full.png">
                </div>
                <ul class="sb-ul">
                    <li><a href="#"><i class="fas fa-home fontawesome"></i>หน้าหลัก<i class="fas fa-chevron-down chev-pos"></i></a>
                        <ul class="sb-sub-ul">
                            <li><a href="show_type.php"></i>ข้อมูลประเภทผ้าทอ</a></li>
                            <li><a href="show_pattern.php"></i>ข้อมูลลายผ้า</a></li>
                            <li><a href="#"></i>ข้อมูลผู้ทอ</a></li>
                            <li><a href="#"></i>ข้อมูลผ้าทอ</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-user fontawesome"></i>โปรไฟล์<i class="fas fa-chevron-down chev-pos"></i></a>
                        <ul class="sb-sub-ul">
                            <li><a href="#"></i>แก้ไขโปรไฟล์</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar-bottom">
                <a href="login.html" class="btn btn-logout">ออกจากระบบ</a>
            </div>
        </div>
        <div class="dashboard">
            <div class="dashboard-title-control">
                <h2 class="dashboard-title">จัดการข้อมูลลายผ้าทอ</h2>
                <br>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">เพิ่มลายผ้า</button>
                <div class="container">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-center " id="exampleModalLabel">เพิ่มลายผ้า</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form name="form1" method="post" action="insert_pattern.php" enctype="multipart/form-data">
                                        <label class="form-label ">ชื่อลายผ้า</label>
                                        <input type="text" name="p_name" class="form-control" require>
                                        <br>
                                        <label>ประเภทผ้าทอ</label>
                                        <select class="form-select " name="typeID">
                                            <?php
                                            $sql = "SELECT * FROM fabrictype ORDER BY type_name";
                                            $hand = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($hand)){
                                            ?>
                                            <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                        <br>
                                        <label class="form-label ">รูปภาพลายผ้า</label>
                                        <input type="file" class="form-control " name="ppic" required>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" name="submit" value="Upload" class="btn btn-success" data-bs-dismiss="modal">ยืนยัน</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">รหัส</th>
                            <th scope="col">ชื่อลายผ้า</th>
                            <th scope="col">ประเภทผ้าทอ</th>
                            <th scope="col">รูปภาพลายผ้า</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM pattern,fabrictype WHERE pattern.type_id = fabrictype.type_id";
                    $hand = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_array($hand)) {
                    ?>
                        <tr>
                            <td><?= $row["pattern_id"] ?></td>
                            <td><?= $row["pattern_name"] ?></td>
                            <td><?= $row["type_name"] ?></td>
                            <td><img src="image/<?=$row['image']?>" width="150px" height="100px"></td>
                            <td> <a href="edit_pattern.php?id=<?= $row["pattern_id"] ?>" class="btn btn-warning">แก้ไข</a></td>
                            <td><a href="delete_pattern.php?id=<?= $row["pattern_id"] ?>" class="btn btn-danger" onclick="Del(this.href);return false; ">ลบ</a></td>
                        </tr>

                    <?php
                    }
                    mysqli_close($conn);
                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </section>

    </div>
    </div>
    </section>
</body>

</html>
<script language="JavaScript">
  function Del(mypage) {
    var agree = confirm("คุณต้องการลบข้อมูลหรือไม่");
    if (agree) {
      window.location = mypage;
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="home.js"></script>
