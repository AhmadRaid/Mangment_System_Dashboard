<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {

        if (auth()->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {

            $user = auth()->user();

//            if ($user->timezone == '' || $user->timezone == null) {
//                // set timezone
//                $timezone = $this->getTimezone($request);
//                $user->update([
//                    $user->timezone = $timezone
//
//                ]);
//            }
//
//            $timezone = optional(auth()->user())->timezone ?? config('app.timezone');
//            Carbon::parse(auth()->user()->created_at)->timezone($timezone);

            return redirect()->route('country.ChooseCountry');
        }
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);

    }


    public function logout(Request $request)
    {
        $request->session()->forget('country');
        Auth::logout();

        return redirect()->route('login');
    }


}
