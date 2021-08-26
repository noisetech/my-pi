<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    public function index(){
        $items = Tahun::all();

        return  view('pages.admin.tahun.index', [
            'items' => $items
        ]);

    }


    public function create(){
        return view('pages.admin.tahun.create');
    }

    public function store(Request $request){
        $data = $request->all();

        Tahun::create($data);

        return redirect()->route('admin.tahun.index');
    }

    public function edit($id){
        $item = Tahun::find($id);

        return view('pages.admin.tahun.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = Tahun::find($id);
        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.tahun.index');
    }

    public function destroy($id){
        $item = Tahun::find($id);

        $item->delete();

        return redirect()->route('admin.tahun.index');
    }
}
