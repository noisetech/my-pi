<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jurusan;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $items = Mahasiswa::with(['jurusan'])->orderBy('nama_lengkap', 'ASC')->get();

        return view('pages.admin.mahasiswa.index', [
            'items' => $items
        ]);
    }

    public function create(Request $request){
        $user = User::all()->where('role', 'mahasiswa')->whereIn('status_akun', '');
        $jurusan = Jurusan::all();

        return view('pages.admin.mahasiswa.create', [
            'user' => $user,
            'jurusan' => $jurusan
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
        $data['status_mahasiswa'] = 'akif';

        Mahasiswa::create($data);

        User::with(['mahasiswa'])->where('id', $request->user_id)->update([
            'status_akun' => 'sudah digunakan'
        ]);

        return redirect()->route('admin.mahasiswa.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil ditambah')
        ->with('status', 'Berhasil');

    }

    public function edit($id){
        $item = Mahasiswa::find($id);
        $jurusan = Jurusan::all();
        $user = User::all()->where('role', 'mahasiswa')->whereIn('status_akun', '');

        return view('pages.admin.mahasiswa.edit', [
            'item' => $item,
            'jurusan' => $jurusan,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        $item = Mahasiswa::find($id);

        $data = $request->all();
        if($request->hasFile('gambar')){
            $penyimpanan = 'public/gambar';
            $gambar = $request->file('gambar');
            $namafile = $gambar->getClientOriginalName();
            $upload = $request->file('gambar')->storeAs($penyimpanan, $namafile);
            $data['gambar'] = $namafile;
        }

        $item->update($data);

        User::with(['mahasiswa'])->where('id', $request->user_id)->update([
            'status_akun' => 'sudah digunakan'
        ]);

        return redirect()->route('admin.mahasiswa.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil diubah')
        ->with('status', 'Berhasil');


    }

    public function destroy($id){
        $item = Mahasiswa::find($id);

        $item->delete();

        return redirect()->route('admin.mahasiswa.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil dihapus')
        ->with('status', 'Berhasil');
    }
}
