@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
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
                <h3>Edit Blog
                  <a class="btn btn-success float-right btn-sm" href="{{route('blog.view')}}"><i class="fa fa-list"></i>Blog List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
               
                   <form method="post" action="{{route('blog.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
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
                      <label for="short_title">Short Title</label>
                      <input type="text" name="short_title" value="{{$editData->short_title}}" class="form-control">
                    </div>

                     <div class="form-group col-md-12">
                      <label for="long_title">Long Title</label>
                      <textarea name="long_title" class="form-control"  rows="5">{{$editData->long_title}}</textarea>
                    </div> 

                    <div class="form-group col-md-2">
                      <img id="showImage" src="{{(!empty($editData->image)) ? url('public/upload/blog_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 150px; height: 160px; border: 1px solid #000;">
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