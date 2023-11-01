<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topup;
use Illuminate\Http\Request;

class AdminTopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Topup::all();
        return view('admin.topup.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.topup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'game' => 'required',
            'user_id' => 'required',
            'nominal' => 'required',
        ]);

        Topup::create($data);
        return redirect('/admin/topup')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Topup::find($id);
        return view('admin.topup.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Topup::find($id);
        return view('admin.topup.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Topup::find($id);
        $data->update($request->all());
        return redirect('/admin/topup')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Topup::find($id);
        $data->delete();
        return redirect('/admin/topup');
    }
}
