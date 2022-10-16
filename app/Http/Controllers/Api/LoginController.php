<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends ApiBaseController
{
    public function login(LoginRequest $request){

        if(!Auth::attempt(['email' => $request->email, 'password' =>  $request->password])){
            $this->sendError('dd');
        }

    }

}
