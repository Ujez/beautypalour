<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Vendor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //  We’re calling the add() method on the AddVendor class.
    // We’re returning the view.
    public function add()
    {
        return view('admin.vendor');
    }

    // 1. We first create a new vendor object.
    // 2. We then get the image file from the request object.
    // 3. We then get the file extension of the image.
    // 4. We then create a new file name using the time() function and the file extension.
    // 5. We then move the file to the vendorsimage directory using the move() method.
    // 6. We then set the image property of the vendor object to the new file name.
    // 7. We then set the other properties of the vendor object.
    // 8. We then save the vendor object to the database.
    // 9. We then redirect the user back to the vendors page with a success message.
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

    // 1. We’re creating a new instance of the appointments model.
    // 2. We’re calling the all() method on the model to get all the appointments.
    // 3. We’re passing the appointments to the view.
    public function showbookings()
    {

        $data = appointments::all();
        return view('admin.showbookings', compact('data'));

    }


    // 1. We first find the appointment with the given id.
    // 2. We then change the status of the appointment to ‘Cancelled’.
    // 3. Finally, we save the changes to the database.
    // 4. And redirect the user back to the appointments page.
    public function cancelbookings($id)
    {
        $data = Appointments::find($id);
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();

    }
}
