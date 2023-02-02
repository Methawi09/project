<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body style="background-image:url(backround.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%; ">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-5 bg-white rounded p-4 shadow" >
                <div>
                    <h1 style="text-align: center;">เข้าสู่ระบบ</h1>
                    <h6 style="text-align: center;">เพื่อความปลอดภัย กรุณาล็อคอินเข้าสู่ระบบเพื่อดูรายละเอียดของท่าน
                    </h6>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="idcard" class="form-label">หมายเลขประชาชน</label>
                        <input type="number" class="form-control" id="idcard" placeholder="หมายเลขประชาชน" required maxlength="13">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="Password" placeholder="รหัสผ่าน" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">จดจำไว้ในระบบ</label>
                        <a href="" style="color: black; margin-left: 60%;">ลืมรหัสผ่าน</a>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </div>

                    <p style="text-align: center;" >หากคุณไม่มีบัญชีผู้ใช้<a href="register.html"
                        class="link-danger">สมัครสมาชิก</a></p>
 
      
                </form>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>
