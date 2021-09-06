<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\frontend\authApi;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ChangeRequest;
use App\Http\Requests\Auth\LoginRequest;
class AuthApiController extends Controller
{
    protected $authService;
    public function __construct(authApi $authService)
    {
        $this->authService = $authService;
    }
    public function register(RegisterRequest $request)
    {
        try {
            $account = $this->authService->registerService($request);
            return response()->json(["account" => $account, 'msg' => 'Dang ky thanh cong'], 200);
        } catch (\Exception $e) {
            throw new HttpException(500, $e->getMessage());
        }
    }
    public function login(LoginRequest $request)
    {
        return $this->authService-> loginService($request);
    }
}
