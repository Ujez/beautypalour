<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\User;
use App\Models\Vendor;
// use GuzzleHttp\Psr7\Request; silly bug

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
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
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $vendor = vendor::all();
            return view('user.home', compact('vendor'));
        }

    }
    public function appointment(Request $request)
    {
        // $data = new Appointments();
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->date = $request->date;
        // $data->phone = $request->phone;
        // $data->specialist = $request->specialist;
        // $data->message = $request->message;
        // $data->status = 'In progress';

        Appointments::insert([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'phone' => $request->phone,
            'specialist' => $request->specialist,
            'message' => $request->message,
            'status' => 'In progress',
        ]);

        $data = new Appointments();

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return Redirect()->back()->with("success", "Appointment successfully scheduled, we'll contact you ASAP!");
    }

    public function mybookings()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $booking = Appointments::where('user_id', $userid)->get();
            return view('user.mybookings', compact('booking'));
            # code...
        }

    }
    public function cancelbookings($id)
    {
        $data = Appointments::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function showbookings()
    {

        return view('admin.showbookings');

    }
}
