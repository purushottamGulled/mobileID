@extends('admin.layouts.app')

@section('content')
<div class="wrapper">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Update Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class') }} fade-in" id="alert">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    {{ Session::get('message') }}
    </div>
    @endif
        <div class="row">
         <div class="col-md-6">
        <div class="card-body p-0">
        <form action="{{route('clientUpdate', [$adminData->id]) }}" method="POST">
		    @csrf
		    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" name="name" value="{{$adminData->name}}"  id="exampleFormControlInput1" placeholder="Client Id">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">email</label>
        <input type="text" class="form-control" name="email" value="{{$adminData->email}}" readonly id="exampleFormControlTextarea1"></textarea>
      </div>
    
		    <button class="btn btn-danger" type="submit">Update</button>
		</form>
        </div>
          <!-- ./col -->
        </div>
       </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  
  <!-- /.control-sidebar -->
</div>
@endsection
<!-- ./wrapper -->


