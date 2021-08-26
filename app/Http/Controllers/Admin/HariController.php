<?php

namespace App\Http\Controllers\Admin;

use App\Hari;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HariController extends Controller
{
    public function index(){
        $items = Hari::all();

        return view('pages.admin.hari.index', [
            'items' => $items
        ]);
    }


    public function create(){
        return view('pages.admin.hari.create');
    }

    public function store(Request $request){
        $data = $request->all();

        Hari::create($data);

        return redirect()->route('admin.hari.index');
    }

    public function edit($id){
        $item = Hari::find($id);

        return view('pages.admin.hari.edit', [
            'item' => $item
        ]);
    }

    public function update(Request $request, $id){
        $item = Hari::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.hari.index');
    }

    public function destroy($id){
        $item = Hari::find($id);

        $item->delete();

        return redirect()->route('admin.hari.index');
    }
}
