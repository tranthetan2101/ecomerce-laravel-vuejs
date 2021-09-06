<?php


namespace App\Services\backend;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function loginService(LoginRequest $request){
        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (Auth::attempt($data)) {
            return true;
        }else {
            return false;
        }
    }
    public function logoutService(){
        Session::flush();
        Auth::logout();
        return Redirect()->route('auth.loginForm');
    }
}