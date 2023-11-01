<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pulsa;
use Illuminate\Http\Request;

class AdminPulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pulsa::all();
        return view('admin.pulsa.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pulsa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'provider' => 'required',
            'phone' => 'required',
            'nominal' => 'required',
        ]);

        Pulsa::create($data);
        return redirect('/admin/pulsa')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pulsa::find($id);
        return view('admin.pulsa.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pulsa::find($id);
        return view('admin.pulsa.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pulsa::find($id);
        $data->update($request->all());
        return redirect('/admin/pulsa')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pulsa::find($id);
        $data->delete();
        return redirect('/admin/pulsa');
    }
}
