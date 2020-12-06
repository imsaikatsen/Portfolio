@extends('frontend.layouts.master')
@section('content')
        <div class="site-section" id="about-section" style="margin-top: 20px;">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
                        <img src="{{asset('public/frontend/images/sen.jpg')}}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6 order-md-1" data-aos="fade">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-left pb-1">
                                    <h2 class="text-black h1 site-section-heading">About</h2>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section" id="project-section">
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
   
        <section class="site-section" id="blog-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="single.html"><img src="{{asset('public/frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                            <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="single.html"><img src="{{asset('public/frontend/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="single.html"><img src="{{asset('public/frontend/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="single.html">Create Beautiful Website In Less Than An Hour</a></h2>
                            <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                            <p><a href="#">Continue Reading...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="text-black h1 site-section-heading">Contact</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 mb-5">
                        <form action="#" class="p-5 bg-white">
                            <h2 class="h4 text-black mb-5 text-center">Contact Form</h2>
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">Kallyanpur,Dhaka</p>
                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+8801717529587</a></p>
                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="0b72647e796e666a62674b6f64666a626525686466">sensaikatcse@gmail.com</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="bg-primary py-5 d-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md10">
                        <h2 class="text-white">Let's Get Started</h2>
                    </div>
                </div>
            </div>
        </a>
 @endsection
      