<?php

namespace App\Exports;

use App\Models\form;
use App\Models\formmentor;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Sheet;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ExportForm implements FromView, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $bulan;

    public function __construct($bulan)
    {
        $this->bulan = $bulan;
    }


    public function view(): View
    {
        $form = DB::table('form_siswa')
        ->whereMonth('form_siswa.tanggal', '=', $this->bulan)
        ->orderBy('form_siswa.siswa')
        ->join('form_mentor', function ($join) {
            $join->on('form_siswa.tanggal', '=', 'form_mentor.tanggal')
                ->on('form_siswa.siswa', '=', 'form_mentor.siswa');
        })
        ->join('toko', function ($join) {
            $join->on('form_siswa.toko', '=', 'toko.kode_toko');
        })
        ->get();
    
        return view('adm.data.tableform', ['form' => $form]);
    }

    public function columnFormats(): array
    {
        return [
            'A' => '0', // Format untuk kolom A (sesuaikan dengan kolom Anda)
            'B' => '0',
            'C' => '0',
            'D' => '0',
            'E' => '0',
            'F' => '0',
            'G' => '0',
            'H' => '0',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20, // Lebar kolom A dalam satuan karakter
            'B' => 50,
            'C' => 50,
            'D' => 20,
            'E' => 40,
            'F' => 40,
            'G' => 30,
            'H' => 40,
             // Lebar kolom B dalam satuan karakter
            // ... dan seterusnya
        ];
    }
    
}
