<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;


class FileController extends Controller
{
    public function index(){
        return view('profile');
    }
    
    public function uploadMultipleFiles(Request $req){
        $req->validate([
          'fileCollection' => 'required',
          'fileCollection.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        if($req->hasfile('fileCollection')) {
            foreach($req->file('fileCollection') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $data[] = $name;  
            }

            $file= new File();
            $file->name=json_encode($data);
            $file->path=json_encode($data);
            
           
            $file->save();
   
           return back()->with('success', 'File uploaded');
        }            
    }

}