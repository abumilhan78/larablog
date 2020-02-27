<?php

namespace App\Http\Controllers;

use App\Hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = Hobi::all();
        return view('hobi.index', compact('hobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hobi::create($request->all());
        return redirect()->route('hobi.index')->with(['message'=>'Data Hobi Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function show(Hobi $hobi)
    {
        return view('hobi.show', compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobi $hobi)
    {
        return view('hobi.edit', compact('hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobi $hobi)
    {
        Hobi::where('id', $hobi->id)
            ->update([
                'hobi' => $request->hobi
            ]);
        return redirect()->route('hobi.index')->with(['message'=>"Data $hobi->hobi Berhasil Di Ubah"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobi $hobi)
    {
        Hobi::destroy($hobi->id);
        return redirect()->route('hobi.index')->with(['message'=>'Data Hobi Berhasil DiHapus']);
    }
}
