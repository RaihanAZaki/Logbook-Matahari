<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logbook Siswa</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    {{-- NAVBAR --}}
    
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/magang" class="flex items-center">
                <img src="{{url('/img/mppa.png')}}" class="h-10 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-black">Logbook Siswa</span>
            </a>
            <div class="flex md:order-2">
                <form action="/logout">
                    <button type="submit" class="text-whit text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 " style="background: #B52544">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="bg-gray-100 min-h-screen flex items-center justify-center px-4 py-12">
        <form action="/magang/formulir" method="POST">
            @csrf
            <img class="img-header" src="{{url('/img/hypermart.jpg')}}" alt="Neeraj Meka" >
                <div class="main">
                    <h1>LAPORAN KEGIATAN HARIAN SISWA RITRA</h1>
                    <hr />
                    <p class="mt-2">
                        Wajib diisi setiap hari sebagai bukti kehadiran dan kegiatan pelatihan berbasis kompetensi RITRA.
                    </p>
                    <h4 class="mt-3" style="color: red;">* Required</h4>
                </div>

                <div class="name">
                    <h3 class="mt-3">Tanggal <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="Date" name="tanggal" id="" required />
                </div>
{{--  
                @foreach ($data as $data) --}}
                <div class="name">
                    <h3 class="mt-3">Toko Pemagangan <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="toko" id="" value="{{ $tokoSiswa }}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">Jabatan siswa RITRA <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="jabatan" id="" value="{{ $jabatanSiswa }}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">NIK - NAMA SISWA RITRA <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="siswa" id="" value="{{ $nikSiswa }} - {{ $namaSiswa }}" style="color: #808080" required readonly/>
                </div>
                
                 {{-- @endforeach --}}

                {{-- <div class="name">
                    <h3 class="mt-3">Toko Pemagangan <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="toko" id="" value="{{$mergedData ->toko_siswa}}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">Jabatan siswa RITRA <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="jabatan" id="" value="{{$mergedData ->jabatan_siswa}} - {{$mergedData ->jabatan_siswa}}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">NIK - NAMA SISWA RITRA <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="siswa" id="" value="{{$mergedData ->nik}} - {{$mergedData ->nama_siswa}}" style="color: #808080" required readonly/>
                </div> --}}

                <div class="name">
                    <h3 class="mt-3">Aktifitas yang dilakukan <span style="color: red;">*</span></h3>
                    <textarea class="mt-6 w-full" name="aktifitas" placeholder="Your Answer"> </textarea>
                </div>

                <div class="name">
                    <h3 class="mt-3">Hal yang didapatkan yang dilakukan <span style="color: red;">*</span></h3>
                    <textarea class="mt-6 w-full" name="hal" placeholder="Your Answer"></textarea>
                </div>

            <div class="submit">
              <button class="sub-button" >Submit</button>
            </div>
            <p class="mt-5 policy">
              Mohon dilengkapi seluruh kolom sebelum melakukan submit data.
              <h1 class="Google" style="color: grey; font-weight: 550; width: 50vw;">Logbook RITRA</h1>
            </p>
          </form>
    </div>

   
</body>
</html>