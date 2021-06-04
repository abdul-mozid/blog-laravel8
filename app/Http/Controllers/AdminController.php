<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\AdminUser;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Auth;

class AdminController extends Controller {

    public function index() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
                    'email' => 'required',
                    'password' => 'required'
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed');
            }
        }
        $admin = AdminUser::where('email','=', $request->email)->first();
        
        if ($admin &&(Hash::check($request->password,$admin->password))) {
            Toastr::success('User Logged is successfully.', 'Success');
            return redirect('/dashboard');
        }else{
             Toastr::error('Wrong user name or password', 'Failed');
             return back();
        }
    }
    
    public function dashboard(){
        return view('admin.dashboard');
    }

}
