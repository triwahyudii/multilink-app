<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CicilanLeasing;
use Illuminate\Http\Request;

class AdminLeasingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CicilanLeasing::all();
        return view('admin.leasing.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leasing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'leasing' => 'required',
            'name' => 'required',
            'nomor_tagihan' => 'required',
            'total' => 'required',
        ]);

        CicilanLeasing::create($data);
        return redirect('/admin/leasing')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = CicilanLeasing::find($id);
        return view('admin.leasing.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = CicilanLeasing::find($id);
        return view('admin.leasing.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = CicilanLeasing::find($id);
        $data->update($request->all());
        return redirect('/admin/leasing')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CicilanLeasing::find($id);
        $data->delete();
        return redirect('/admin/leasing');
    }
}
