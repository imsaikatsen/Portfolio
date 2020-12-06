<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;

class FrontendController extends Controller
{
    public function index(){
        $data['blog'] = Blog::orderBy('id','desc')->get();
    	return view('frontend.layouts.home', $data);
    }

    public function about(){
    	
    	return view('frontend.single_pages.about');
    }

    public function project(){
        
        return view('frontend.single_pages.project');
    }

    public function contact(){
    	
    	return view('frontend.single_pages.contact');
    }

    public function blog($id){
        $data['blog'] = Blog::find($id);
        return view('frontend.single_pages.blog-details',$data);
    }


}
