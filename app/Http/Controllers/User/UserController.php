<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Lomba;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.home', [
            'lombas' => Lomba::all()->count()
        ]);
    }
}
