@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
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
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Add Project
                  <a class="btn btn-success float-right btn-sm" href="{{route('project.view')}}"><i class="fa fa-list"></i>Project List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">

                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
               
                   <form method="post" action="{{route('project.store')}}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="date">Date</label>
                      <input type="text" name="date"  id="datepicker" class="form-control" placeholder="YYYY-MM-DD" readonly>
                    </div>

                     <div class="form-group col-md-4">
                      <label for="image">Image</label>
                      <input type="file" name="image" class="form-control" id="image">
                    </div>

                     <div class="form-group col-md-4">
                      <label for="project_name">Project Name</label>
                      <input type="text" name="project_name" class="form-control">
                    </div>

                     <div class="form-group col-md-6">
                      <label for="project_details">Project Details</label>
                      <textarea name="project_details" class="form-control"  rows="5"></textarea>
                    </div> 

                    <div class="form-group col-md-6" style="margin-top: 25px;">
                      <img id="showImage" src="{{(!empty($editData->image)) ? url('public/upload/user_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 170px; height: 150px; border: 1px solid #000;">
                    </div>

                   <div class="form-group col-md-12">
                      <input type="submit" value="Post" class="btn btn-primary">
                  </div>   
                </div>        
               </form>
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
</script>
@endsection