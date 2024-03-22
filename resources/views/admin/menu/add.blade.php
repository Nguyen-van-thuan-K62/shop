@extends('admin.user.main')
@section('content')

<form action="/admin/menu/add" method="post">

    <div class="card-body">

        <div class="form-group">
            <label >Tên sản Phẩm </label>
            <input type="text"  name = "name" class="form-control">
        </div>

        
        <div class="form-group">
            <label>Ảnh sản phẩm </label>
            <input type="text"  name = "image" class="form-control">
        </div>

        <div class="form-group">
            <label >Mô tả</label>
            <textarea class="form-control" name = "description"></textarea>
        </div>

        <div class="form-group">
            <label >Gía tiền </label>
            <textarea class="form-control" name = "price"></textarea>
        </div>

        <div class="form-group">
            <label >Mô tả chi tiết</label>
            <textarea class="form-control" name = "content"></textarea>
        </div>

        <!-- <div class ="form - group">
            <label>Kích hoạt</label>
            <div class= "custum-control custum-radio">
                <input type="radio" class= "custum-control-input" value = "1" id="active" name = "active" checked = "">
                <label for = "active" class = "custum-control-lable">có</label>
            </div>

            <div class= "custum-control custum-radio">
                <input type="radio" class= "custum-control-input"  value = "0" id="no_active" name = "active">
                <label for = "no_active" class = "custum-control-lable">không</label>
            </div>
        </div> -->

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    </div>
    @csrf
</form>
@endsection 

<!-- @section('footer')
    <scrip>
        CKEDITOR.replace('content');
    </scrip>
@endsection -->
