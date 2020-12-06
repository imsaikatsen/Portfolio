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
                <h3>Edit Project
                  <a class="btn btn-success float-right btn-sm" href="{{route('blog.view')}}"><i class="fa fa-list"></i>Project List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               
                   <form method="post" action="{{route('project.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                    <div class="form-group col-md-4">
                      <label for="date">Date</label>
                      <input type="text" name="date"  id="datepicker" class="form-control" placeholder="YYYY-MM-DD" readonly>
                    </div>

                     <div class="form-group col-md-8">
                      <label for="image">Image</label>
                      <input type="file" name="image" value="{{$editData->date}}" class="form-control" id="image">
                    </div>

                     <div class="form-group col-md-12">
                      <label for="project_name">Project Name</label>
                      <input type="text" name="project_name" value="{{$editData->project_name}}" class="form-control">
                    </div>

                     <div class="form-group col-md-12">
                      <label for="project_details">Project Details</label>
                      <textarea name="project_details" class="form-control"  rows="5">{{$editData->project_details}}</textarea>
                    </div> 

                    <div class="form-group col-md-2">
                      <img id="showImage" src="{{(!empty($editData->image)) ? url('public/upload/project_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 160px; border: 1px solid #000;">
                    </div>

                   <div class="form-group col-md-12">
                      <input type="submit" value="Update" class="btn btn-primary">
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