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

   <form action="/cart/add/{{$menu->id}}" method = "post">
    @csrf
     <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="{{$menu->image}}" class="w-100" alt="..."  name = "image" value="image">
        </div>

        <div class="col-md-6 p-4 ps-md-0">
            
            <h5 class="mt-0" name = "description" value = "image">{{$menu->description}}</h5>

            <h5 class="mt-0" name = "price" value = "price" >{{$menu->price}}</h5>

            <p>{{$menu->content}}</p>

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