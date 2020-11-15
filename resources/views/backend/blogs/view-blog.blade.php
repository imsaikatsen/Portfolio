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
                <h3>Blog List
                  <a class="btn btn-success float-right btn-sm" href="{{route('blog.add')}}"><i class="fa fa-plus-circle"></i>Add Blog</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Image</th>
                      <th>Short Title</th>
                      <th>Long Title</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $blog)
                      <tr>
                      <td>{{$blog->date}}</td>
                        <td><img src="{{(!empty($blog->image)) ? url('public/upload/blog_images/'.$blog->image):url('public/upload/no_image.png')}}" width="120px" height="120px"></td>
                          <td>{{$blog->short_title}}</td>
                          <td>{{$blog->long_title}}</td>
                          <td>
                          <a title="edit" class="btn btn-primary" href="{{route('blog.edit', $blog->id)}}"><i class="fa fa-edit"></i></a>
                          <a title="delete" id="delete" class="btn btn-danger" href="{{route('blog.delete', $blog->id)}}"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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
@endsection