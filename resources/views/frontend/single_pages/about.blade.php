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
@endsection