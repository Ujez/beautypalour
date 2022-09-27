<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Vendor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.vendor');
    }

    public function upload(Request $request)
    {
        $vendor = new vendor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('vendorsimage', $imagename);

        $vendor->image = $imagename;
        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->specialty = $request->specialty;
        $vendor->vid = $request->vid;
        $vendor->message = $request->message;

        $vendor->save();
        return redirect()->back()->with('success', 'added successfully');

    }
    public function showbookings()
    {

        $data = appointments::all();
        return view('admin.showbookings', compact('data'));
        # code...

    }
}
