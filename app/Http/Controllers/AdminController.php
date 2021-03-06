<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Register;
use App\User;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    //


    public function index() {
        if (Auth::check()) {
            $users = Register::all();
            $title = 'Dashboard';
            return view('admin.dashboard', compact('title','users'));
        } else {

            return redirect('/admin');
        }
    }
    
    public function listUsers(){
        if (Auth::check()) {
            $users = Register::all();
            $title = 'List Users';
            return view('admin.list', compact('title','users'));
        }  else {
            return redirect('/admin');
        }
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/admin');
        } else {

            return redirect('/admin');
        }
    }

}
