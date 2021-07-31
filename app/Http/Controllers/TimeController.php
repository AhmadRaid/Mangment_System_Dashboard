<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    public function time()
    {

        $date = date('h:i:s', strtotime(Auth::user()->timezone . 'hours'));

        return view('time.create', compact('date'));
    }


    public function changetime(Request $request)
    {

        $user = User::find(1);
        $date = date('h:i:s', strtotime($user->timezone . 'hours'));

        $user->update([
            'timezone' => $request->timezone
        ]);
        return 'dasd';
    }

}
