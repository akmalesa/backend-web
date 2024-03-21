<?php

namespace App\Imports;

use App\Models\Jenis;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JenisImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //dd($row);
        return new Jenis([
            'No.' => auth()->user()->No,
            'Nama Jenis' => $row['jenis'],
            'Tanggal Input' => $row['Tanggal Input'],
            'Tanggal Update' => $row['Tanggal Update']
        ]);
    }

    public function headingRow(): int
    {
        return 3;
    }
}
