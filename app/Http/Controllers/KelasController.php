<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kls = Kelas::all();
        return view('kelas.index',compact('kls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kelas' => 'required|',
            'tahun_ajaran' => 'required|'
        ]);
        $kls = new Kelas;
        $kls->kelas = $request->kelas;
        $kls->tahun_ajaran = $request->tahun_ajaran;
        $kls->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kls = Kelas::findOrFail($id);
        return view('kelas.show',compact('kls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kls = Kelas::findOrFail($id);
        return view('kelas.edit',compact('kls'));
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
         $this->validate($request,[
            'kelas' => 'required|',
            'tahun_ajaran' => 'required|'
        ]);
        $kls = Kelas::findOrFail($id);
        $kls->kelas = $request->kelas;
        $kls->tahun_ajaran = $request->tahun_ajaran;
        $kls->save();
        return redirect()->route('kelas.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Kelas::findOrFail($id);
        $a->delete();
        return redirect()->route('kelas.index');
    }
}
