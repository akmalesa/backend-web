<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Exports\JenisExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\JenisImport;

use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;

class JenisController extends Controller
{

    public function index()
    {
        $data['jenis'] = Jenis::orderBy('created_at', 'DESC')->get();

        return view('jenis.index', ['title' => 'Jenis'])->with($data);
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
    public function store(StoreJenisRequest $request)
    {
        Jenis::create($request->all());

        return redirect('jenis')->with('success', 'Data jenis berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJenisRequest $request, Jenis $jeni)
    {
        $jeni->update($request->all());

        return redirect('jenis')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jeni)
    {
        $jeni->delete();

        return redirect('jenis')->with('success', 'Delete data berhasil!');
    }

    public function exportData()
    {
        $date = date('Y-m-d');
        return Excel::download(new JenisExport, $date . '_jenis.xlsx');
    }

    public function importData()
    {
        Excel::import(new JenisImport, request()->file('import'));

        return redirect(request()->segment(1) . '/jenis')->with('success', 'Import data jenis berhasil!');
    }
}
