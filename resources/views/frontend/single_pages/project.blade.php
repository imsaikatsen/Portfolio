@extends('frontend.layouts.master')
@section('content')
<section class="site-section" id="project-section" style="margin-top:20px;">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="text-black h1 site-section-heading text-center">Projects</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, itaque neque, delectus odio iure explicabo.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_1.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Bonzai Tree</h2>
                                <span class="category">Web Application</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_2.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_2.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Simple Woman</h2>
                                <span class="category">Branding</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_3.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_3.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Fruits</h2>
                                <span class="category">Website</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_4.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_4.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Design Material</h2>
                                <span class="category">Web Application</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_5.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_5.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Handy Food</h2>
                                <span class="category">Branding</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="{{asset('public/frontend/images/img_6.jpg')}}" class="media-1" data-fancybox="gallery">
                            <img src="{{asset('public/frontend/images/img_6.jpg')}}" alt="Image" class="img-fluid">
                            <div class="media-1-content">
                                <h2>Cat With Cup</h2>
                                <span class="category">Website</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection