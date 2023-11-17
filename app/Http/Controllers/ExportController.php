<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportForm;
use App\Models\form;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    function dataForm()
    {
        $form = form::paginate(7);

         return view('adm/data/tableform', [
            'form' => $form,
        ]);
    }

    public function exportCSVFile(Request $request) 
    {
        $bulan = $request->input('bulan');
        $namaFile = 'form_' . $bulan . '_' . now()->format('Y-m-d_H-i-s') . '.xlsx';
        $exportForm = new ExportForm($bulan); // Buat objek ExportForm dengan parameter bulan
        return Excel::download($exportForm, $namaFile);
    }
    
}
