<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class AdminController extends Controller
{
    public function add(){
        return view('admin.vendor');
    }

    public function upload(Request $request){
        $vendor = new vendor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('vendorsimage', $imagename);
       
        $vendor->image=$imagename;
        $vendor->name=$request->name;
        $vendor->phone=$request->phone;
        $vendor->specialty=$request->specialty;
        $vendor->vid=$request->vid;
        $vendor->message=$request->message;

        $vendor->save();
        return redirect()->back()->with('success','added successfully');


    }
}
