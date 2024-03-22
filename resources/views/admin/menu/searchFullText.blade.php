@extends('admin.user.main')
@section('content')
<div class="content-wrapper" style="min-height: 2012.94px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h2 class="text-center display-4">Search</h2>
      </div>
    </section>

    <!-- Main content -->
    @foreach($results as $result)
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="">
                        <div class="input-group input-group-lg">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="{{$result->name}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-10 offset-md-1">
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col px-4">
                                    <div>
                                        <div class="float-right">{{$result->created_at}}</div>
                                        <h3>{{$result->name}}</h3>
                                        <p class="mb-0">{{$result->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
  </div>
  

@endsection 