<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lomba;
use App\Dlomba;


class LombaController extends Controller
{
    public function daftarLomba()
    {
        $lombas = Lomba::orderBy('id', 'desc')->paginate(5);
        return view('user.lomba.daftar', compact('lombas'));
    }

    public function formDaftar()
    {
        return view('user.lomba.form', [
            'lombas' => Lomba::with('getDlomba')->get()
        ]);
    }
    /** 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function daftar(Request $request)
    {
        $dlombas = $request->all();
        $dlombas['pelogin'] = auth()->user()->name;
        $dlombas['user_id'] = auth()->id();
        $dlombas['status'] = 'proses';
        $dlombas['lomba_id'] = 6;
        $dlombas['bukti'] = $request->file('bukti')->store(
            'assets/gallery',
            'public'
        );
        Dlomba::create($dlombas);
        return redirect()->route('user.lomba.daftar');
    }

    public function listLomba()
    {
        return view('user.lomba.list');
    }

    public function detailLomba()
    {
        return view('user.lomba.lomba');
    }
}
