<?php

namespace App\Http\Controllers;

use App\Models\CicilanBank;
use Illuminate\Http\Request;

class CicilanBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CicilanBank::all();
        return view('cicilan-bank.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cicilan-bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CicilanBank::create($request->except(['_token']));
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = CicilanBank::find($id);
        return view('cicilan-bank.show', compact(['data']));
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
