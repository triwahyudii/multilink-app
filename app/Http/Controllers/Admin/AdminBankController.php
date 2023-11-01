<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CicilanBank;
use Illuminate\Http\Request;

class AdminBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CicilanBank::all();
        return view('admin.bank.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'bank' => 'required',
            'nomor_tagihan' => 'required',
            'name' => 'required',
            'total' => 'required',
        ]);

        CicilanBank::create($data);
        return redirect('/admin/bank')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = CicilanBank::find($id);
        return view('admin.bank.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = CicilanBank::find($id);
        return view('admin.bank.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = CicilanBank::find($id);
        $data->update($request->all());
        return redirect('/admin/bank')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = CicilanBank::find($id);
        $data->delete();
        return redirect('/admin/bank');
    }
}
