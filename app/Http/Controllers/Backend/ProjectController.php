<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Project;
use Carbon\Carbon;
use App\Http\Requests\StoreProject;

class ProjectController extends Controller
{
     public function view(){
    	$data['allData'] = Project::all();
    	return view('backend.projects.view-project',$data);      
    }

    public function add(){
    	return view('backend.projects.add-project');
    }

    public function store(StoreProject $request){
    	$data = New Project();
    	$data->date = Carbon::parse($request->date)->format('Y-m-d');
      $data->project_name = $request->project_name;
      $data->project_details = $request->project_details;
      if ($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('upload/project_images/'.$data->image));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/project_images'),$filename);
        $data['image'] = $filename;
      }
      $data->save();
      return redirect()->route('project.view')->with('success','Project Posted successfully');
    }

    public function edit($id){

    	$editData = Project::find($id);
    	return view('backend.projects.edit-project',compact('editData'));

    }

   public function update(Request $request, $id){
        $data = Project::find($id);
        $data->date = date('y-m-d',strtotime($request->date));
        $data->project_name = $request->project_name;
        $data->project_details = $request->project_details;
        $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/blog_images/'.$data->iamage));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/project_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        return redirect()->route('project.view')->with('success','Project Updated successfully');
    }

    public function delete($id){
        $project = Project::find($id);
        if (file_exists('public/upload/project_images/' . $project->image) AND ! empty($project->image)) {
            unlink('public/upload/project_images/' . $project->image);
        }
        $project->delete();

        return redirect()->route('project.view')->with('success','Project Deleted successfully');
    }
}
