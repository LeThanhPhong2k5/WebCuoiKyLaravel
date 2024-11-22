<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }
    //Xác minh cho tài khoản admin
    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()) {
            
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                
                if(Auth::guard('admin')->user()->role != "admin")
                {
                    Auth::guard('admin')->logout();
                    return redirect()->route('admin.login')->with('error', 'Bạn không phải là người để truy cập vào trang này');
                }
                
                return redirect()->route('admin.main');
            } else {
                return redirect()->route('admin.login')->with('error', 'Tài khoản Email hoặc mật khẩu không đúng');
            }


        }else{
            return redirect()->route('admin.login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
