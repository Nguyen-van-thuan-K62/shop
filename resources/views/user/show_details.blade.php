<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hien thi  chi tiet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<!-- navbar -->
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Trang chủ</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Sản Phẩm</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Tin Tức</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Về Chúng Tôi</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Liên Hệ</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="/user/signin/">
            <button type="button" class="btn btn-outline-light me-2">Đăng Nhập</button>
          </a>
          <a href="/user/signup/">
            <button type="button" class="btn btn-warning">Đăng Ký</button>
          </a>
          <button type="button" class="btn btn-outline-light me-2"  data-bs-target="#demo" data-bs-toggle="offcanvas" data-bs-toggle="tooltip" title="Bạn cần đăng nhập">
          Giỏ Hàng <span class="badge bg-danger">0</span> 
          </button> 
        </div>
      </div>
    </div>
</header>
<!-- cart -->

<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Giỏ Hàng</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
    <p>sp co trong gio hang</p>
   
    <button class="btn btn-secondary" type="button">đặt hàng</button>
  </div>
</div>

<form action="" method = "post">
@csrf
    <div class="row g-0 bg-body-secondary position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
        <img src="" class="w-100" alt="..."  name = "image" value="image">
    </div>

    <div class="col-md-6 p-4 ps-md-0">
        
        <h5 class="mt-0" name = "description" value = "image">Mô tả sản phẩm </h5>

        <h5 class="mt-0" name = "price" value = "price" >giá</h5>

        <div class="container mt-3">
            <div class="d-inline-flex text-black border border - black bg-white">  
                <div class="p-2">
                    <button class = "border border-white bg-white">xóa</button>
                </div>
                <div class="p-2 ">0</div>
                <div class="p-2">
                    <button class = "border border-white bg-white">thêm</button>
                </div>
            </div>
        </div>

        <p>content</p>

        <!-- <a href="#" class="stretched-link">Go somewhere</a> -->

        <div class="container-fluid">
            <button class="btn btn-primary">
                Thêm vào giỏ
            </button>
            <a href="google.com" id="purchase">
                <button class="btn btn-primary">
                    Mua hàng
                </button>
            </a>
        </div>

    </div>

    </div>
</form>
         
</body>
</html>