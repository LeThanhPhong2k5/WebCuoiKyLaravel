<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

// class AuthController extends Controller
// {

//     public function register()
//     {
//         return view('DangKy'); 
//     }

//     public function registerPost(Request $request)
//     {

//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|email|unique:users,email',
//             'password' => 'required|min:6|confirmed',
//         ]);

//         // Tạo người dùng mới
//         $user = new User();
//         $user->name = $request->user;
//         $user->email = $request->email;
//         $user->password = Hash::make($request->password);
//         $user->save();

//         return redirect()->route('DangKy')->with('success', 'Đăng ký thành công');
//     }

}
