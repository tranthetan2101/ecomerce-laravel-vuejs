<?php

namespace App\Http\Controllers;
use App\Services\backend\AuthService;
use App\Http\Requests\Auth\LoginRequest;

class AdminController extends Controller
{
    protected $AuthService;
    public function __construct(AuthService $authService){
        $this->AuthService = $authService;
    }
    public function username()
    {
        return 'email';
    }
    public function LoginForm()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        if ($this->AuthService-> loginService($request) == true) {
            return redirect()->route('dashboard')->with('success','login thanh cong');
        }else {
            return redirect()->route('auth.loginForm')->with('error','sai tai khoan hoc mat khau');
        }
    }
    public function logout(){
        return $this->AuthService-> logoutService();
    }
}
