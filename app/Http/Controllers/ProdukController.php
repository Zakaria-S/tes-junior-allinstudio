<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_produk = Produk::all();
        return view('index')->with('list_produk', $list_produk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric|min:100000',
            'merk_id' => 'required',
            'kategori_id' => 'required'
        ]);
        if (!Produk::create($attributes)) {
            return back()->with("failed", "Alert! failed to store data");
        }
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('show')->with('produk', $produk);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('edit')->with('produk', $produk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attributes = request()->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric|min:100000',
            'merk_id' => 'required',
            'kategori_id' => 'required'
        ]);
        if (!Produk::find($id)->update($attributes)) {
            return back()->with("failed", "Alert! failed to store data");
        }
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::destroy($id);
        return redirect('/produk');
    }
}
