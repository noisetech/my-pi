<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    public function index(){
        $items = User::orderBy('name', 'ASC')->get();

        return view('pages.admin.manage-user.index', [
            'items' => $items
        ]);
    }

    public function create(){
        return view('pages.admin.manage-user.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('admin.manage-user.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil ditambah')
        ->with('status', 'Berhasil');
    }

    public function edit($id){
        $item = User::find($id);

        return view('pages.admin.manage-user.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = User::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.manage-user.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil diubah')
        ->with('status', 'Berhasil');
    }

    public function destroy($id){
        $item = User::find($id);

        $item->delete();

        return redirect()->route('admin.manage-user.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil dihapu')
        ->with('status', 'Berhasil');
    }
}
