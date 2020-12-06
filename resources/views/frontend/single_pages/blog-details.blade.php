@extends('frontend.layouts.master')
@section('content')
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 style="padding-top: 15px; padding-bottom: 5px; border-bottom: 1px solid #000000; width: 70px; ">Blog
                </h3>
            </div>
            <div class="col-md-14">
                <img src="{{asset('public/upload/blog_images/'.$blog->image)}}" style="border: 1px solid #ddd; padding: 5px; background:#EEEE03; border-radius: 30px; float: left; margin-right: 10px; width: 350px; height: 250px;">
                <p style="text-align: justify;">
                {{$blog->long_title}}</p>
            </div>
        </div>
    </div>
</section>
@endsection