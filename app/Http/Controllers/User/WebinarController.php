<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function daftarWebinar()
    {
        return view('user.webinar.daftar');
    }

    public function formDaftar()
    {
        return view('user.webinar.form');
    }

    public function listWebinar()
    {
        return view('user.webinar.list');
    }

    public function detailWebinar()
    {
        return view('user.webinar.menu');
    }
}
