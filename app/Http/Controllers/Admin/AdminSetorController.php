<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SetorTunai;
use Illuminate\Http\Request;

class AdminSetorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SetorTunai::all();
        return view('admin.setor-tunai.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setor-tunai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'bank' => 'required',
            'name' => 'required',
            'rekening' => 'required',
            'total' => 'required',
        ]);

        SetorTunai::create($data);
        return redirect('/admin/setor-tunai')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SetorTunai::find($id);
        return view('admin.setor-tunai.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = SetorTunai::find($id);
        return view('admin.setor-tunai.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = SetorTunai::find($id);
        $data->update($request->all());
        return redirect('/admin/setor-tunai')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SetorTunai::find($id);
        $data->delete();
        return redirect('/admin/setor-tunai');
    }
}
