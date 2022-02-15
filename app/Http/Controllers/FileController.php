<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFileRequest;

class FileController extends Controller
{
   public function index()
   {
       $files = File::all();
       return view('layouts.file.index',compact('files'));
   }
   public  function store(StoreFileRequest $request)
   {
       $name_file= time().".".$request->file->extension();
       $request->file->move(public_path('uploads'),$name_file);
        $file= new File();
        $file->logo = $name_file;
       $file->save();
       session()->flash('add','Files Stored Successfully');
       return redirect()->back();
   }
   public function update(Request $request ,$id)
   {
       $name_file= time().".".$request->file->extension();
       $request->file->move(public_path('uploads'),$name_file);
       $file=  File::find($id);
       $file->logo = $name_file;
       $file->save();
       session()->flash('add','Files Updated Successfully');
       return redirect()->back();
   }


}
