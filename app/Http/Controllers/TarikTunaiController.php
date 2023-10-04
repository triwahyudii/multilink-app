<?php

namespace App\Http\Controllers;

use App\Models\TarikTunai;
use Illuminate\Http\Request;

class TarikTunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TarikTunai::all();
        return view('tarik-tunai.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarik-tunai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TarikTunai::create($request->except(['_token']));
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = TarikTunai::find($id);
        return view('tarik-tunai.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
