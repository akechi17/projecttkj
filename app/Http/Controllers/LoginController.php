<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;




class LoginController extends Controller
{
//     protected function sendFailedLoginResponse(Request $request)
// {
//     return redirect()->back()
//         ->withInput($request->only('email', 'remember'))
//         ->withErrors([
//             'email' => __('auth.failed'),
//         ]);
// }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $request->username => [trans('auth.failed')],
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        // @dd($request);
        // $credentials = $request->validate([
        //     'email' => 'require',
        //     'password' => 'require',
        // ]);

        $validator = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
    
        if (Auth::attempt($validator)) {
            $request->session()->regenerate();
            return "login berhsil"; // Ubah dengan URL halaman yang sesuai
        }
    
        return $this->sendFailedLoginResponse($request);
    }


}
