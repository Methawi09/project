 <?php
    include 'condb.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM fabrictype WHERE type_id='$id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>

 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>edit_type</title>
     <link rel="stylesheet" href="home.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 </head>

 <body>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
                             <li><a href="#"></i>ข้อมูลผ้าทอ</a></li>
                             <li><a href="#"></i>ข้อมูลประเภทผ้าทอ</a></li>
                             <li><a href="#"></i>ข้อมูลลายผ้า</a></li>
                             <li><a href="#"></i>ข้อมูลผู้ทอ</a></li>
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
                 <h2 class="dshboard-title" style="text-align: center;">แก้ไขประเภทผ้า</h2>
                 <hr>
                 <div class="containe">
                     <div class="row vh-50 align-items-center justify-content-center">
                         <div class="col-sm-6 ">
                             <form method="POST" action="update_type.php">

                                 <label class="form-label ">รหัสประเภทผ้า</label>
                                 <input type="text" class="form-control" readonly value=<?=$row['type_id']?>  name="tid" require>
                                 <br>
                                 <label class="form-label ">ชื่อประเภทผ้า</label>
                                 <input type="text" class="form-control" value=<?=$row['type_name']?>   name="tname" require>
                                 <br>
                                 <input type="submit" value="ยืนยัน" class="btn btn-success">
                                 <a href="show_type.php" class="btn btn-secondary">ยกเลิก</a>

                             </form>
                         </div>

                     </div>
                 </div>
             </div>

     </section>

 </body>

 </html>
