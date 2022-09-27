<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use App\Models\Appointments;
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
            if (Auth::user()->usertype == '0') {
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
        $data = new appointments;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->phone;
        $data->specialist = $request->specialist;
        $data->message = $request->message;
        $data->status = 'In progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;

        }
        $data->save();
        return redirect()->back();
    }

}
