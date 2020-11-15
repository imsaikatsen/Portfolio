<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Blog;

class BlogController extends Controller
{
    public function view(){
    	$data['allData'] = Blog::all();
    	return view('backend.blogs.view-blog',$data);      
    }

    public function add(){
    	return view('backend.blogs.add-blog');
    }

    public function store(Request $request){
    	$data = New Blog();
    	$data->date = date('y-m-d',strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/blog_images/'.$data->iamage));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        return redirect()->route('blog.view')->with('success','Blog Posted successfully');
    
    }

    public function edit($id){

    	$editData = Blog::find($id);
    	return view('backend.blogs.edit-blog',compact('editData'));

    }

   public function update(Request $request, $id){
        $data = Blog::find($id);
        $data->date = date('y-m-d',strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/blog_images/'.$data->iamage));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/blog_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect()->route('blog.view')->with('success','Blog Updated successfully');
    }

    public function delete($id){
        $blog = Blog::find($id);
        if (file_exists('public/upload/blog_images/' . $blog->image) AND ! empty($blog->image)) {
            unlink('public/upload/blog_images/' . $blog->image);
        }
        $blog->delete();

        return redirect()->route('blog.view')->with('success','Blog Deleted successfully');
    }

       
}
