<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class ProdukController extends Controller
{

    public function index()
    {

        $data['produk'] = Produk::orderBy('created_at', 'DESC')->get();

        return view('produk.index', ['title' => 'Produk'])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        Produk::create($request->all());

        return redirect('produk')->with('success', 'Data produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProdukRequest $request, Produk $produk)
    {
        $produk->update($request->all());

        return redirect('produk')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('produk')->with('success', 'Delete data berhasil!');
    }
}
