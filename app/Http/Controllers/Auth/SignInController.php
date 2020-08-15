<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function __invoke(Request $request)
    {
        $loginDetails = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!$token = auth()->attempt($loginDetails)) {
            return response()->json([
                "errors" => [
                    'email' => "Couldn't sign you in"
                ]
            ], 401);
        }

        return response()->json([
            'data' => compact('token')
        ]);
    }
}
