@extends('frontend.layouts.master')
@section('content')
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
                            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+8801717529587</a></p>
                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="0b72647e796e666a62674b6f64666a626525686466">sensaikatcse@gmail.com</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
@endsection