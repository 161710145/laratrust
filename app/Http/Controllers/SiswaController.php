<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $n = Siswa::all();
        return view('siswa.index',compact('n'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'nama' => 'required|',
            'ttl' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'agama' => 'required|'
        ]);
        $n= new Siswa;
        $n->nama = $request->nama;
        $n->ttl = $request->ttl;
        $n->jk = $request->jk;
        $n->alamat = $request->alamat;
        $n->agama = $request->agama;
        $n->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $n = Siswa::findOrFail($id);
        return view('siswa.show',compact('n'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $n = Siswa::findOrFail($id);
        return view('siswa.edit',compact('n'));
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
            'nama' => 'required|',
            'ttl' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'agama' => 'required'
        ]);
        $n = Siswa::findOrFail($id);
        $n->nama = $request->nama;
        $n->ttl = $request->ttl;
        $n->jk = $request->jk;
        $n->alamat = $request->alamat;
        $n->agama = $request->agama;
        $n->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $n = Siswa::findOrFail($id);
        $n->delete();
        return redirect()->route('siswa.index');
    }
}
