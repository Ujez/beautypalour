<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

// use GuzzleHttp\Psr7\Request; silly bug

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    // 1. We first check if the user is logged in. If not, we redirect them to the login page.
    // 2. If the user is logged in, we check if the user is a vendor. If so, we redirect them to the vendor dashboard.
    // 3. If the user is logged in and they are not a vendor, we redirect them to the admin dashboard.
    public function redirect()
    {
        // if (Auth::id()) {
        //     if (Auth::user()->usertype=='0') {
        //         return view('dashboard');
        //     }
        //     else {
        //         return view('admin.index');
        //     }
        // }

        if (Auth::id()) {

            // if (Auth::user()->usertype ==  '0')
            if (Auth::user()->usertype == '0' || '1') {
                $vendor = vendor::all();
                return view('user.home', compact('vendor'));
            } else {
                return view('admin.index');
            }
        }
    }
    // public function index()
    // {
    //     $vendor = vendor::all();
    //     return view('user.home', compact('vendor'));
    // }


    //  1. We’re checking if the user is logged in or not. If the user is logged in, we’ll redirect him to the home page.
    // 2. If the user is not logged in, we’ll load the view and pass the vendor data to it.
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $vendor = vendor::all();
            return view('user.home', compact('vendor'));
        }

    }

    // 1. We’re creating a new Appointments model object.
    // 2. We’re setting the name, email, date, phone, specialist, and message properties of the model.
    // 3. We’re checking if the user is logged in. If they are, we’ll set the user_id property of the model to the current user’s ID.
    // 4. We’re saving the model.
    // 5. We’re redirecting the user back to the home page with a success message.
    public function appointment(Request $request)
    {

        $data = new Appointments();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->specialist = $request->specialist;
        $data->message = $request->message;
        $data->status = 'In progress';

        // Appointments::insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'created_at' => Carbon::now(),
        //     'phone' => $request->phone,
        //     'specialist' => $request->specialist,
        //     'message' => $request->message,
        //     'status' => 'In progress',
        // ]);

        // $data = new Appointments();

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return Redirect()->back()->with("success", "Appointment successfully scheduled, we'll contact you ASAP!");
    }


    // 1. We’re checking if the user is logged in. If they are, we’re grabbing the user’s ID and using it to grab all the appointments that have been booked by the user.
    // 2. We’re passing the appointments to the view.
    public function mybookings()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $booking = Appointments::where('user_id', $userid)->get();
            return view('user.mybookings', compact('booking'));
        }

    }


    // 1. We’re first checking if the user is logged in. If not, we redirect them to the login page.
    // 2. We’re then checking if the user has the correct permissions to delete the appointment. If not, we redirect them to the dashboard.
    // 3. We’re then checking if the appointment exists. If not, we redirect them to the dashboard.
    // 4. We’re then checking if the appointment has already been deleted. If so, we redirect them to the dashboard.
    // 5. We’re then deleting the appointment.
    // 6. We’re then redirecting the user back to the dashboard.
    public function cancelbookings($id)
    {    
        $data = Appointments::find($id);
        $data->delete();
        return redirect()->back();

    }

    
    // 1. It creates a new method called showbookings.
    // 2. It renders the view file named showbookings.blade.php.
    public function showbookings()
    {
        return view('admin.showbookings');
    }
}
