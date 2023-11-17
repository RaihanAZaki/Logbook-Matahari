<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formmentor;
use App\Models\mentor;
use App\Models\siswa;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    function dataMentor() {
        // Dapatkan pengguna yang saat ini masuk
        $user = auth()->user();
        // $tokoSiswa = null; // Inisialisasi variabel $tokoSiswa
    
        if ($user) {
            $nik = $user->nik; // Ambil 'nik' dari pengguna yang saat ini masuk
            
            // Cari data siswa berdasarkan 'nik'
            $mentor = Mentor::where('nik_mentor', $nik)->first();
    
            if ($mentor) {
                // Data siswa ditemukan, aman untuk mengakses properti 'toko_siswa'.
                $nikMentor = $mentor->nik_mentor;
                $namaMentor = $mentor->nama_mentor;
                $tokoMentor = $mentor->toko_mentor;

                $siswa = Siswa::where('toko_siswa', $tokoMentor)->get();
            }
        }
    
        return view('mentor/mntr-logbook', [
            'tokoMentor' => $tokoMentor, // Kirim data 'tokomentor' ke tampilan
            'nikMentor' => $nikMentor,
            'namaMentor' => $namaMentor,
            'siswa' => $siswa
        ]);
    }

    function insertFormMentor(Request $request) {
        formmentor::create($request->except(['_token']));
        session()->flash('success', 'Data berhasil disimpan.');
        
          return redirect('mentor');
    }
    
    function historiLogbookMentor(Request $request) {

        $user = auth()->user();

        if ($user) {
            $nik = $user->nik; // Ambil 'nik' dari pengguna yang saat ini masuk
            
            // Cari data siswa berdasarkan 'nik'
            $form = formmentor::where('mentor', $nik)->get();

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

        return view('mentor/mntr-histori', [
            'form' => $form, // Kirim data 'tokoSiswa' ke tampilan
        ]);

    }
}
