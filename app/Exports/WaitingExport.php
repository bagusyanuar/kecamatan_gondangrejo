<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WaitingExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Pengaduan::where('status', '=', 0)
            ->get();

        $collection = [];
        foreach ($data as $key => $v) {
            $tmp = [
                ($key + 1),
                $v->tanggal,
                $v->nama,
                $v->no_hp,
                $v->pengaduan
            ];
            array_push($collection, $tmp);
        }
        return new Collection($collection);
    }

    /**
     * @inheritDoc
     */
    public function headings(): array
    {
        return [
            'No.',
            'Tanggal',
            'Nama',
            'No. Hp',
            'Aduan'
        ];
    }
}
