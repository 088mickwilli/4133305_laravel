<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;

class AdminController extends Controller
{
    public function register(){
        return view('admin.register');
    }

    public function login(){
        return view('admin.login');
    }
    //register
    public function registerUsers(Request $request){
        // return("Register");
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:8'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $db = $user->save();
        if($db){
            return back()->with('บันทึกสำเร็จ','บันทึกบัญชีผู้ใช้เรียบร้อยแล้ว');
        }else{
            return back()->with('บันทึกไม่สำเร็จ','การบันทึกบัญชีผู้ใช้เกิดการขัดข้อง');
        }
    }
}
