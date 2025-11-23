<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswaa = Siswa::get();
        return view('siswa.index',['siswaa' => $siswaa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Kelas = Kelas::all();
        $data = ([
            "Kelas" => $Kelas
        ]);
        return view('siswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelas = $request->kelas_id;
        $nis = $request->nis;
        $nama = $request->nama;
        $jk = $request->jk;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $sosial_media = $request->sosial_media;
        $alamat = $request->alamat;

        $foto = $request->file('foto');
        $Namafoto = "foto_siswa_".time().'.'.
        $foto->getClientOriginalExtension();

        $foto->move(public_path('uploads'),$Namafoto);

        Siswa::create([
            'kelas_id' =>$kelas,
            'nis' =>$nis,
            'nama' =>$nama,
            'jk' =>$jk,
            'tempat_lahir' =>$tempat_lahir,
            'tanggal_lahir' =>$tanggal_lahir,
            'sosial_media' =>$sosial_media,
            'alamat' =>$alamat,
            'foto' =>$Namafoto
        ]);

        return redirect('siswa')->with('success','Siswa berhasil ditambah!');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail('$id');
        $kelas = Kelas::all();
        $data =([
            'siswa' => $siswa,
            'kelas' => $kelas
        ]);
        return view('siswa.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::find($id);

        $siswa->kelas_id = $request->kelas;
        $siswa->nama = $request->nama;
        $siswa->jk = $request->jk;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->sosial_media = $request->sosial_media;
        $siswa->alamat = $request->alamat;

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $Namafoto = 'foto_siswa_'.time().'.'.
            $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads'),$Namafoto);

            $siswa->foto = $Namafoto;
        }

        $siswa->save();
        return redirect('siswa/'.$id.'/edit')->with('success','Data siswa berhasil disimpan!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect("siswa")->with('success','Data siswa berhasil dihapus!');
    }
}
