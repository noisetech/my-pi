<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(){
        $items = MataKuliah::orderBy('nama_mata_kuliah')->get();

        return view('pages.admin.mata-kuliah.index', [
            'items' => $items
        ]);
    }

    public function store(Request $request){
        $data = $request->all();

        MataKuliah::create($data);

        return redirect()->route('admin.matakuliah.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil ditambah')
        ->with('status', 'Berhasil');
    }

    public function create(){
        return view('pages.admin.mata-kuliah.create');
    }

    public function edit($id){
        $item = MataKuliah::find($id);

        return view('pages.admin.mata-kuliah.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = MataKuliah::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.matakuliah.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil diubah')
        ->with('status', 'Berhasil');
    }

    public function destroy($id){
        $item = MataKuliah::find($id);

        $item->delete();

        return redirect()->route('admin.matakuliah.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil dihapus')
        ->with('status', 'Berhasil');
    }
}
