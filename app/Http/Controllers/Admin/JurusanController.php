<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Jurusan::orderBy('nama_jurusan', 'ASC')->get();

        return view('pages.admin.jurusan.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dd($data);

        Jurusan::create($data);
        return redirect()->route('admin.jurusan.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil ditambah')
        ->with('status', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Jurusan::find($id);

        return view('pages.admin.jurusan.edit', [
            'item' => $item
        ]);
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
        $item = Jurusan::find($id);

        $data = $request->all();

        $item->update($data);

        return redirect()->route('admin.jurusan.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil diubah')
        ->with('status', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jurusan::find($id);

        $item->delete();

        return redirect()->route('admin.jurusan.index')
        ->with('status_code', 'success')
        ->with('status_text', 'Data berhasil dihapus')
        ->with('status', 'Berhasil');
    }
}
