<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<div class="border rounded-3 m-auto mt-5 bg-secondary" style = "height:450px ; width:400px;">
    <div class="m-auto" style = "height:380px ; width:330px;">
        <h3 class="text-center text-white my-4">Đăng Ký</h3>
        <form action="/user/signup" method = "post">
            @csrf
        <div class="mb-3">
            <label class="form-label">Họ và Tên</label>
            <input type="text" class="form-control"name= "name" >
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"  name ="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Mật Khẩu</label>
            <input type="password" class="form-control" name = "password">
        </div>

        <div class = "mx-auto"  style = "width:100px" >
            <button type="submit" class="btn btn-primary ">Tiếp Tục</button>
        </div>

        </form>
    </div>
</div>
</body>
</html>