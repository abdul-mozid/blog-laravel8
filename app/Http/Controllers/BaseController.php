<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class BaseController extends Controller {

    public function home() {
        return view('home');
    }

    public function ourCompany() {
        return view('ourCompany');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }

}
