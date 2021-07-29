<?php

namespace App\Http\Controllers;


use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //

    protected function respondWithToken($credentials)
    {
        return response()->json([
            'token' => $credentials,
            'token_type' => 'bearer',
        ]);
    }
}
