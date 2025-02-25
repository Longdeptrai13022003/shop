<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(){
        
    }
    public function index(){
        return view("backend.auth.login");
    }
    public function login(AuthRequest $request){
        $credential=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')];
        
        if(Auth::attempt( $credential )){
            return redirect()->route('dashboard.index')->with('login_success','Đăng nhập thành công !');
        }
        else{
            return redirect()->route('auth.admin')->with('login_error','Sai tên đăng nhập hoặc mật khẩu !');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.admin')->with('logout_success','Đăng xuất thành công !');
    }
}
