<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
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
            return back()->with('success','บันทึกบัญชีผู้ใช้เรียบร้อยแล้ว');
        }else{
            return back()->with('fail','บันทึกไม่สำเร็จ');
        }
    }
    //login
    public function loginUsers(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $check = User::where('email','=',$request->email)->first();
        if($check){
            if(Hash::check($request->password,$check->password)){
                $request->session()->put('loginUsers',$check->id);
                return redirect('panel');
            }else{
                return back()->with('fail','รหัสผ่านหรืออีเมล์ไม่ถูกต้อง');
            }
        }else{
            return back()->with('fail','บัญชีอาจยังไม่ได้สมัครสมาชิก');
        }
    }
    //admin panel
    public function panel(){
        // return "ยินดีตอนรับสู่หน้าแอดมิน";
        $user = array();
        if(Session::has('loginUsers')){
            $user = User::where('id','=',Session::get('loginUsers'))->first();
        }
        return view('panel',compact('user'));
    }
    //logout
    public function logout(){
        if(Session::has('loginUsers')){
            Session::pull('loginUsers');
            return redirect('login');
        }
    }
}
