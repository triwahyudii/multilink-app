<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TarikTunai;
use Illuminate\Http\Request;

class AdminTarikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TarikTunai::all();
        return view('admin.tarik-tunai.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tarik-tunai.create');
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

        TarikTunai::create($data);
        return redirect('/admin/tarik-tunai')->with('success', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = TarikTunai::find($id);
        return view('admin.tarik-tunai.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = TarikTunai::find($id);
        return view('admin.tarik-tunai.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = TarikTunai::find($id);
        $data->update($request->all());
        return redirect('/admin/tarik-tunai')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TarikTunai::find($id);
        $data->delete();
        return redirect('/admin/tarik-tunai');
    }
}
