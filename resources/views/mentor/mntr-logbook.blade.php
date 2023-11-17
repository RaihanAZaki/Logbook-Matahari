<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logbook Mentor</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style.css') !!}">
</head>
<body>

    {{-- NAVBAR --}}
    
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/mentor" class="flex items-center">
                <img src="{{url('/img/mppa.png')}}" class="h-10 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Logbook Mentor</span>
            </a>
            <div class="flex md:order-2">
                <form action="/logout">
                    <button type="submit" class="text-whit text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 " style="background: #B52544">Logout</button>
                </form>
            </div>
        </div>
    </nav>
  


    <div class="bg-gray-100 min-h-screen flex items-center justify-center px-4 py-12">
        <form action="/mentor/formulir" method="POST">
            @csrf
            <img class="img-header" src="{{url('/img/hypermart.jpg')}}" alt="Neeraj Meka" >
                <div class="main">
                    <h1>LAPORAN KEGIATAN HARIAN MENTOR</h1>
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

                <div class="name">
                    <h3 class="mt-3">Toko Pemagangan <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="toko" id="" value="{{ $tokoMentor }}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">NIK - NAMA  MENTOR RITRA <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="Mentor" id="" value="{{ $nikMentor }} - {{ $namaMentor }}" style="color: #808080" required readonly/>
                </div>
                
                <div class="name">
                    <h3 class="mt-3">Pilih Siswa <span style="color: red;">*</span></h3>
                    <select class="mt-8" name="siswa" id="siswa" style="color: #808080" required>
                        <option value="">Pilih Siswa</option> <!-- Opsi default -->
                        @foreach($siswa as $siswaItem)
                            <option value="{{ $siswaItem->nik_siswa }} - {{ $siswaItem->nama_siswa }}">{{ $siswaItem->nik_siswa }} - {{ $siswaItem->nama_siswa }}</option>
                        @endforeach
                    </select>
                </div>
              
                
                {{-- <div class="name">
                    <h3 class="mt-3">Nama Siswa Ritra <span style="color: red;">*</span></h3>
                    <input class="mt-8" type="text" name="siswa" id="" value="{{$user->nik_siswa}} - {{$user->nama}}" style="color: #808080" required readonly/>
                </div> --}}

                
                

                <div class="name">
                    <h3 class="mt-3">Komentar terkait sikap kerja/ minat/ perkembangan ataupun saran untuk siswa RITRA tersebut<span style="color: red;">*</span></h3>
                    <textarea class="mt-6 w-full" name="komentar" placeholder="Your Answer"> </textarea>
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