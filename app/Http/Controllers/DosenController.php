<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $dosen = new Dosen();
        // $dosen->nama = $request->nama;
        // $dosen->nipd = $request->nipd;
        // $dosen->save();
        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with(['message'=>'Dosen Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        //$dos = Dosen::findOrFail($dosen);
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        //$dos = Dosen::findOrFail($dosen);
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        // $dos = Dosen::findOrFail($dosen);
        // $dosen->nama = $request->nama;
        // $dosen->nipd = $request->nipd;
        // $dosen->save();
        Dosen::where('id', $dosen->id)
            ->update([
                'nama' => $request->nama,
                'nipd' => $request->nipd
            ]);
        return redirect()->route('dosen.index')->with(['message'=>'Data Dosen Berhasil Di Ubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        //$dos = Dosen::findOrFail($dosen)->delete();
        Dosen::destroy($dosen->id);
        return redirect()->route('dosen.index')->with(['message'=>'Data Dosen Berhasil DiHapus']);
    }
}
