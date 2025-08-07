<?php

namespace App\Http\Controllers;

use App\Models\Tes;
use Illuminate\Http\Request;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tes = Tes::latest()->get();
        return view('tes.index', compact('tes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastId = Tes::max('id') ?? 0;
        $nextId = str_pad($lastId + 1, 3, '0', STR_PAD_LEFT);
        $generatedCode = $nextId . '-client';
        return view('tes.create', compact('generatedCode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product_client' => 'required',
                'name_client' => 'required',
                'alamat' => 'required',
                'pic' => 'required',
                'email' => 'required|email|unique:tes',
                'nomor_hp' => 'required',
            ]
        );

        tes::create($request->all());

        return redirect()->route('tes.index')->with('success', 'Client has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tes $tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tes = Tes::findOrFail($id);
        return view('tes.edit', compact('tes'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'code_client' => 'required',
                'name_client' => 'required',
                'alamat' => 'required',
                'pic' => 'required',
                'email' => 'required|email',
                'nomor_hp' => 'required',
            ]
        );

        $tes = Tes::findOrFail($id);
        $tes->update($request->all());

        return redirect()->route('tes.index')->with('success', 'Client has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tes = Tes::findOrFail($id);
        $tes->delete();

        return redirect()->route('tes.index')->with('success', 'Client has been delete!');
    }
}
