<?php

namespace App\Http\Controllers;

use App\Models\toko;
use App\Models\mentor;
use App\Models\jabatan;
use App\Models\User;
use App\Models\siswa;
use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //Function Admin
    function index()
    {
        echo "WOI!";
    }

    // INI UNTUK ADMIN
    function admin()
    {
        $tokoCount = DB::table('toko')->count();
        $jabatanCount = DB::table('jabatan')->count();
        $siswaCount = DB::table('siswa')->count();
        $mentorCount = DB::table('mentor')->count();
        $userCount = DB::table('users')->count();

        $siswaData = DB::table('siswa')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();
    
    // Mengambil data mentor dari tabel mentor
        $mentorData = DB::table('mentor')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        $userData = DB::table('users')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        return view('admin',[
            'tokoCount'=>$tokoCount,
            'jabatanCount'=>$jabatanCount,
            'siswaCount'=>$siswaCount,
            'mentorCount'=>$mentorCount,
            'siswaData'=>$siswaData,
            'mentorData'=>$mentorData,
            'userData'=>$userData,
            'userCount'=>$userCount
        ]);
    }

    function admToko()
    {
        $user = User::paginate(5);
        return view('/adm/adm-toko', [
            'user' => $user,
        ]);
    }

    function admJabatan()
    {
        return view('/adm/adm-jabatan');
    }

    function admMentor()
    {
        return view('/adm/adm-mentor');
    }

    function admSiswa()
    {
        return view('/adm/adm-siswa');
    }

    function datalengkap()
    {
        $siswa = siswa::paginate(5);
        $toko = toko::paginate(5);
        $jabatan = jabatan::paginate(5);
        $mentor = mentor::paginate(5);

         return view('datalengkap', [
            'toko' => $toko,
            'siswa' => $siswa,
            'jabatan' => $jabatan,
            'mentor' => $mentor
        ]);
    }

   

    function profile()
    {
        $user = User::all();
        $siswa = siswa::all();

         return view('profile', [
            'user' => $user,
            'siswa' => $siswa
        ]);
    }

    function mentor()
    {
        return view('mentor');
    }

    function magang()
    {
        return view('magang');
    }

    function formulir()
    {
        return view('mgng/mgng-formulir');
    }

    function toko() 
    {
        $tokoQuery = toko::query();

        // Use the simplePaginate method on the query builder
        $toko = $tokoQuery->simplePaginate(8);

        return view('adm/adm-toko', [
            'toko' => $toko,
        ]);
    }

    function allDataSiswa()  
    {
        $siswa = siswa::paginate(5);
        $toko = toko::all();
        $jabatan = jabatan::all();

        return view('adm/adm-siswa', [
            'toko' => $toko,
            'siswa' => $siswa,
            'jabatan' => $jabatan
        ]);
    }

    function allDataToko()  
    {
        $toko = toko::paginate(5);

        return view('adm/adm-toko', [
            'toko' => $toko
        ]);
    }

    // public function insertSiswa(Request $request)
    // {
    //     // dd($request->except(['_token']));
    //     siswa::create($request->except(['_token']));
    //     return redirect('/admin/siswa');
    // }

    // public function destroySiswa($id) 
    // {
    //     $siswa = siswa::find($id);
    //     $siswa-> delete();
    //     return redirect('/admin/siswa');
    // }

    // public function insertToko(Request $request)
    // {
    //     // dd($request->except(['_token']));
    //     toko::create($request->except(['_token']));
    //     return redirect('insert-toko');
    // }

    public function destroyToko($id) 
    {
        $toko = toko::find($id);
        $toko-> delete();
        return redirect('/admin/toko');
    }


    function allDataJabatan()  
    {
        $jabatan = jabatan::paginate(5);

        return view('adm/adm-jabatan', [
            'jabatan' => $jabatan
        ]);
    }

    // public function insertJabatan(Request $request)
    // {
    //     // dd($request->except(['_token']));
    //     jabatan::create($request->except(['_token']));
    //     return redirect('/admin/jabatan');
    // }

    // public function destroyJabatan($id) 
    // {
    //     $jabatan = jabatan::find($id);
    //     $jabatan-> delete();
    //     return redirect('/admin/jabatan');
    // }


    // SESI INSERT USER :D
    function admUser()
    {
        $user = User::all();
        $toko = toko::all();
        $jabatan = jabatan::all();
        
        return view('/adm/adm-user', [
            'user' => $user,
            'toko' => $toko,
            'jabatan' => $jabatan
        ]);
    }

    public function insertUser(Request $request)
    {
        $data = $request->except(['_token']);
        if ($request->has('password')) {
            $data['password'] = Hash::make($data['password']);
        }
        

        User::create($data);
        return redirect('insert-new-user');
    }

    public function destroyUser($id) 
    {
        $user = User::find($id);
        $user-> delete();
        return redirect('user-management');
    }

    function userManagement()
    {
        $user = User::paginate(7);

         return view('user', [
            'user' => $user,
        ]);
    }

    // INI BAGIAN TOKO
    function dataToko()
    {
        $toko = toko::paginate(7);

         return view('adm/data/datatoko', [
            'toko' => $toko,
        ]);
    }
        
    public function formToko(Request $request) {
        return view('/adm/insert/insertoko');
    }
    public function insertToko(Request $request)
    {
        toko::create($request->except(['_token']));
        return view('/adm/insert/insertoko');
    }

    public function editToko($kode_toko)
    {
        $toko = toko::find($kode_toko);
        // dd($Berita);
        return view('adm/edit/edittoko', compact(['toko']));
    }

    public function updateToko($kode_toko, Request $request) 
    {
        $toko = toko::find($kode_toko);
        $toko -> update($request->except(['_token']));
        return redirect('toko');
    }
    

      // INI BAGIAN JABATAN
    function dataJabatan()
    {
        $jabatan = jabatan::paginate(7);
  
        return view('adm/data/datajabatan', [
            'jabatan' => $jabatan,
        ]);
    }

    public function formJabatan(Request $request) 
    {
        return view('/adm/insert/insertjabatan');
    }

    public function insertJabatan(Request $request)
    {
        jabatan::create($request->except(['_token']));
        return view('/adm/insert/insertjabatan');
    }

    public function editJabatan($id)
    {
        $jabatan = jabatan::find($id);
        // dd($Berita);
        return view('adm/edit/editjabatan', compact(['jabatan']));
    }

    public function updateJabatan($id, Request $request) 
    {
        $jabatan = jabatan::find($id);
        $jabatan -> update($request->except(['_token']));
        return redirect('jabatan');
    }

    public function destroyJabatan($id) 
    {
        $jabatan = jabatan::find($id);
        $jabatan-> delete();
        return redirect('jabatan');
    }

    //   INI BAGIAN SISWA
      function dataSiswa()
      {
        // $siswa = DB::table('siswa')
        // ->join('jabatan', 'siswa.jabatan_siswa', '=', 'jabatan.id')
        // ->join('toko', 'siswa.toko_siswa', '=', 'toko.kode_toko')
        // ->join('users', 'siswa.nik_siswa', '=', 'users.nik')
        // ->paginate(5);
        $siswa = siswa::paginate(7);
  
           return view('adm/data/datasiswa', [
              'siswa' => $siswa,
          ]);
      }

      public function formSiswa(Request $request) 
      {
        $toko = toko::all();
        $jabatan = jabatan::all();
        $user = User::all();
        return view('/adm/insert/insertsiswa', [
        'toko' => $toko,
        'jabatan' => $jabatan,
        'user' => $user
        ]);
    }
  
      public function insertSiswa(Request $request)
      {
          siswa::create($request->except(['_token']));
          return redirect('siswa');
      }
  
      public function editSiswa($id)
      {
          $siswa = siswa::find($id);
          // dd($Berita);
          return view('adm/edit/editsiswa', compact(['siswa']));
      }
  
      public function updateSiswa($id, Request $request) 
      {
          $siswa = siswa::find($id);
          $siswa -> update($request->except(['_token']));
          return redirect('siswa');
      }
  
      public function destroySiswa($id) 
      {
          $siswa = siswa::find($id);
          $siswa-> delete();
          return redirect('siswa');
      }

        //   INI BAGIAN MENTOR
        function dataMentor()
        {
            $mentor = mentor::paginate(7);
    
             return view('adm/data/datamentor', [
                'mentor' => $mentor,
            ]);
        }   

        public function formMentor(Request $request) 
        {
            $toko = toko::all();
            $user = User::all();
            return view('/adm/insert/insertmentor', [
            'toko' => $toko,
            'user' => $user
            ]);
        }

        public function insertMentor(Request $request)
        {
            mentor::create($request->except(['_token']));
            return redirect('mentors');
        }

        public function editMentor($id)
        {
            $mentor = mentor::find($id);
            // dd($Berita);
            return view('adm/edit/editmentor', compact(['mentor']));
        }
    
        public function updateMentor($id, Request $request) 
        {
            $mentor = mentor::find($id);
            $mentor -> update($request->except(['_token']));
            return redirect('mentors');
        }

        public function destroyMentor($id) 
        {
            $mentor = mentor::find($id);
            $mentor-> delete();
            return redirect('mentors');
        }

        // INI FORMULIR
        function dataForm()
        {
            $form = DB::table('form_siswa')
            ->join('form_mentor', function ($join) {
                $join->on('form_siswa.tanggal', '=', 'form_mentor.tanggal')
                    ->on('form_siswa.siswa', '=', 'form_mentor.siswa');
            })
            ->join('toko', function ($join) {
                $join->on('form_siswa.toko', '=', 'toko.kode_toko');
            })
        ->paginate(7);
 
    
             return view('adm/data/dataform', [
                'form' => $form,
            ]);
        }
        
          // INI FORMULIR
          function tes()
          {
            return view('/adm/insert/inserttes');
          }
          

}