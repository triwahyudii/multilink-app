<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pln;
use Illuminate\Http\Request;

class AdminPlnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pln::all();
        return view('admin.pln.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pln.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'nominal' => 'required',
        ]);

        Pln::create($data);
        return redirect('/admin/pln')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pln::find($id);
        return view('admin.pln.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pln::find($id);
        return view('admin.pln.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pln::find($id);
        $data->update($request->all());
        return redirect('/admin/pln')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pln::find($id);
        $data->delete();
        return redirect('/admin/pln');
    }
}
