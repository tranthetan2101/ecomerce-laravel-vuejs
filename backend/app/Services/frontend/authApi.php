<?php
namespace App\Services\frontend;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\ChangeRequest;
use App\Http\Requests\Auth\RegisterRequest;
class authApi
{
    public function registerService(RegisterRequest $request){
        $data = [
            'username'=>$request->get('username'),
            'image'=>'http://127.0.0.1:8000/storage/photos/6133a62f15df4.jpg',
            'email'=>$request->get('email'),
            'password'=>bcrypt($request->get('password')),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'sex'=>$request->get('sex'),
            'age'=>$request->get('age'),
            'birth_day'=>$request->get('birth_day'),
            'type'=>3
        ];
        return User::create($data);
    }
    public function loginService(LoginRequest $request){

        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (auth('web')->attempt($data)) {
            $account = auth()->user();
            $tokenResult = $account->createToken('authToken')->plainTextToken;
            return response()->json(['account' => $account,'token' => $tokenResult,'token_type' => 'Bearer', 'msg' => "Dang nhap thanh cong"], 200);
        } else {
            return response()->json(['msg' => "Dang nhap that bai"], 211);
        }
    }
    public function logoutService(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'logout thanh cong'],211);
    }
    public function user(Request $request){
        return response()->json($request->user());
    }
}