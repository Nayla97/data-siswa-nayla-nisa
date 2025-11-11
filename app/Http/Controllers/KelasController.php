<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kelas as KelasModel;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = KelasModel::get();
        $data = ([
            'kelas' => $kelas
        ]);
        return view('kelas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        KelasModel::create([
            'name' => $name
        ]);
        return redirect('kelas')->with('success','Kelas berhasil ditambahkan');
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
        $kelas = KelasModel::findOrFail($id);
        return view('kelas.edit',['kelas'=>$kelas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kelas = KelasModel::find($id);
        $kelas->name = $request->name;
        $kelas->save();
        return redirect('kelas/'.$id.'/edit')->with('success','Kelas berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = KelasModel::find($id);
        $kelas->delete();
        return redirect('kelas')->with('success','Kelas berhasil dihapus');
        }
}
