@extends('admin.user.main')

@section('content')
<table class = "table">
    <thead>
        <tr>
            <th>Id</th>           
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Update</th>

        </tr>
    </thead>
        @foreach($lists as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>
                    <img class="card-img-top" src="{{$list->image}}" style="width:5%">
                </td>
                <td>{{$list->name}}</td>
                <td>{{$list->description}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->created_at}}</td>
                <td>
                    <a class = "btn btn-primary btn-sm" href="/admin/menu/update/{{$list->id}}">
                        <i class = "fas fa-edit"></i>
                    </a>
                    <a href ='/admin/menu/delete/{{$list->id}}'class = "btn btn-danger btn-sm" onclick = "removeRow(' .$list->id .' \'admin/menu/distroy/')" >
                        <i class = "fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            
        @endforeach
        <!-- {{$lists->links()}} -->
        
</table>

@endsection 