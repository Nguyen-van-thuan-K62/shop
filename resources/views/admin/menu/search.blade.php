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
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="search" method = "post">
                    {{ csrf_field() }}
                        <div class="input-group input-group-lg">
                            <input type="text" name = "name" class="form-control form-control-lg" placeholder="Type your keywords here"">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </section>
  </div>
@endsection 
<script type="text/javascript">
   $('#header-search').on('keyup', function() {
       var search = $(this).serialize();
       if ($(this).find('.m-input').val() == '') {
           $('#search-suggest div').hide();
       } else {
           $.ajax({
               url: '/search',
               type: 'POST',
               data: search,
           })
           .done(function(res) {
               $('#search-suggest').html('');
               $('#search-suggest').append(res)
           })
       };
   });
</script>