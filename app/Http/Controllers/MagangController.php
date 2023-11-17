<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\jabatan;
use App\Models\siswa;
use App\Models\User;
use App\Models\form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MagangController extends Controller
{
    function dataMagang() {
        // Dapatkan pengguna yang saat ini masuk
        $user = auth()->user();
    
        $tokoSiswa = null; // Inisialisasi variabel $tokoSiswa
    
        if ($user) {
            $nik = $user->nik; // Ambil 'nik' dari pengguna yang saat ini masuk
            
            // Cari data siswa berdasarkan 'nik'
            $siswa = Siswa::where('nik_siswa', $nik)->first();
    
            if ($siswa) {
                // Data siswa ditemukan, aman untuk mengakses properti 'toko_siswa'.
                $jabatanSiswa = $siswa->jabatan_siswa;
                $nikSiswa = $siswa->nik_siswa;
                $namaSiswa = $siswa->nama_siswa;
                $tokoSiswa = $siswa->toko_siswa;
            }
        }
    
        return view('mgng/mgng-formulir', [
            'tokoSiswa' => $tokoSiswa, // Kirim data 'tokoSiswa' ke tampilan
            'nikSiswa' => $nikSiswa,
            'namaSiswa' => $namaSiswa,
            'jabatanSiswa' => $jabatanSiswa
        ]);
    }
    

    function insertForm(Request $request) {
        form::create($request->except(['_token']));
        session()->flash('success', 'Data berhasil disimpan.');
        
          return redirect('magang');
    }
    
    function historiLogbook(Request $request) {

        $user = auth()->user();

        if ($user) {
            $nik = $user->nik; // Ambil 'nik' dari pengguna yang saat ini masuk
            
            // Cari data siswa berdasarkan 'nik'
            $form = form::where('siswa', $nik)->get();

            // dd($form);
            // if ($form) {
            //     $tanggal = $form->tanggal;
            //     $id = $form->id;
            //     $siswa = $form->siswa;
            //     $jabatan = $form->jabatan;
            //     $toko = $form->toko;
            //     $aktifitas = $form->aktifitas;
            //     $hal = $form->hal;
            // }
        }

        return view('mgng/mgng-histori', [
            'form' => $form, // Kirim data 'tokoSiswa' ke tampilan
        ]);

    }
}
