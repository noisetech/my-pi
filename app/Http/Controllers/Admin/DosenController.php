<?php

namespace App\Http\Controllers\Admin;

use App\Dosen;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $items = Dosen::with(['user'])->orderBy('nama_lengkap', 'ASC')->get();

        return view('pages.admin.dosen.index', [
            'items' => $items
        ]);
    }

    public function create(){
        $user = User::all()->where('role', 'dosen')->whereIn('status', '');

        return view('pages.admin.dosen.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $data = $request->all();

        if($request->hasFile('gambar')){
            $penyimpanan = 'public/gambar';
            $gambar = $request->file('gambar');
            $namafile = $gambar->getClientOriginalName();
            $upload = $request->file('gambar')->storeAs($penyimpanan, $namafile);
            $data['gambar'] = $namafile;
        }

        // dd($data);

        Dosen::create($data);

        User::with(['dosen'])->where('id', $request->user_id)->update([
            'status_akun' => 'sudah digunakan'
        ]);

        return redirect()->route('admin.dosen.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil ditambah')
        ->with('status', 'Berhasil');
    }

    public function edit($id){
        $item = Dosen::find($id);
        $user = User::all();

        return view('pages.admin.dosen.edit', [
            'item' => $item,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        $item = Dosen::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.dosen.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil diubah')
        ->with('status', 'Berhasil');
    }

    public function destroy($id){
        $item = Dosen::find($id);
        $item->delete();
        return redirect()->route('admin.dosen.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil dihapus')
        ->with('status', 'Berhasil');
    }
}
