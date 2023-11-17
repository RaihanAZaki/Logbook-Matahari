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
  
    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Toko
                </th>
                <th scope="col" class="px-6 py-3">
                    Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                    NIK - Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Aktifitas
                </th>
                <th scope="col" class="px-6 py-3">
                    Hal
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($form as $item)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                     {{$item -> id}}
                </th>
            
                <td class="px-6 py-4">
                    {{$item -> tanggal}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> toko}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> siswa}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> jabatan}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> aktifitas}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> hal}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


   
</body>
</html>