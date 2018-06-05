<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\Siswa;
use App\Kelas;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abs = Absen::with('Siswa')->get();
        return view('absen.index',compact('abs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
                $kelas = Kelas::all();

        return view('absen.create',compact('siswa','kelas'));
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
            'nis' => 'required|unique:absens',
            'tanggal' => 'required|',
            'keterangan' => 'required',
            'siswa_id' => 'required',
            'kelas_id' => 'required'
            
        ]);
        $abs = new Absen;
        $abs->nis = $request->nis;
        $abs->tanggal = $request->tanggal;
        $abs->keterangan = $request->keterangan;
        $abs->siswa_id = $request->siswa_id;
        $abs->save();
        $abs->Kelas()->attach($request->kelas_id);
        return redirect()->route('absen.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abs = Absen::findOrFail($id);
        return view('absen.show',compact('abs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $abs = Absen::findOrFail($id);
        $siswa = Siswa::all();
        $selectedSiswa = Absen::findOrFail($id)->siswa_id;
        $selected = $abs->kelas->pluck('id')->toArray();
        $kelas = Kelas::all();
        
        return view('absen.edit',compact('abs','siswa','selectedSiswa','selected','kelas'));
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
            'nis' => 'required|',
            'tanggal' => 'required|',
            'keterangan' => 'required|',
            'siswa_id' => 'required',
            'kelas_id' => 'required'
            
        ]);
        $abs = Absen::findOrFail($id);
        $abs->nis = $request->nis;
        $abs->tanggal = $request->tanggal;
        $abs->keterangan = $request->keterangan;
        $abs->siswa_id = $request->siswa_id;
        $abs->save();
        $abs->Kelas()->sync($request->kelas_id);
        return redirect()->route('absen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $h = Absen::findOrFail($id);
        $h->delete();
        return redirect()->route('absen.index');
    }
}
