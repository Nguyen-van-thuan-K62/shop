@extends('admin.user.main')
@section('content')

<form action="/admin/menu/update/{{ $menu->id }}" method="post">
@csrf
   
    <div class="card-body">

        <div class="form-group">
            <label >ID</label>
            <input type="text"  name = "id" class="form-control" value="{{ $menu->id }}" >
        </div>

        
        <div class="form-group">
            <label >Tên sản phẩm </label>
            <input type="text"  name = "name" class="form-control" value="{{ $menu->name }}">
        </div>

        <div class="form-group">
            <label >Ảnh sản phẩm </label>
            <input type="text"  name = "image" class="form-control" value="{{ $menu->image}}">
        </div>

        <div class="form-group">
            <label >Mô tả</label>
            <input type="text"  name = "description" class="form-control" value="{{ $menu->description}}">
        </div>

        <div class="form-group">
            <label >Gía Tiền</label>
            <input type="text"  name = "price" class="form-control" value="{{ $menu->price}}">
        </div>

        <div class="form-group">
            <label >Mô tả chi tiết </label>
            <input type="text"  name = "content" class="form-control" value="{{ $menu->content}}">
        </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">SỬA</button>
    </div>
    @csrf
   
</form>
@endsection 

<!-- @section('footer')
    <scrip>
        CKEDITOR.replace('content');
    </scrip>
@endsection -->
