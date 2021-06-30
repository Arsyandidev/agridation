<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dlomba;
use App\Lomba;
use App\User;

class DlombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super.dlomba.index', [
            'dlombas' => Dlomba::with('getLomba')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super.dlomba.create', [
            'lombas' => Lomba::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dlombas = $request->all();
        $dlombas['user_id'] = auth()->id();
        $dlombas['bukti'] = $request->file('bukti')->store(
            'assets/gallery',
            'public'
        );
        Dlomba::create($dlombas);
        return redirect()->route('dlomba.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('super.dlomba.detail', [
            'dlombas' => Dlomba::with('getLomba')->findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('super.dlomba.edit', [
            'dlombas' => Dlomba::with('getLomba')->findOrFail($id),
            'lombas' => Lomba::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('bukti')) {
            $data['bukti'] = $request->file('bukti')->store(
                'assets/gallery',
                'public'
            );
        }
        $dlombas = Dlomba::findOrFail($id);
        $dlombas->update($data);
        return redirect()->to('dlomba.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlombas = Dlomba::findOrFail($id);
        $dlombas->delete();
        return redirect()->route('dlomba.index');
    }
}
