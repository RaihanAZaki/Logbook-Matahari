<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logbook Siswa</title>
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
  
    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3">
                    Mentor
                </th>
                <th scope="col" class="px-6 py-3">
                    Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    Toko
                </th>
                <th scope="col" class="px-6 py-3">
                    Komentar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($form as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     {{$item -> id}}
                </th>
            
                <td class="px-6 py-4">
                    {{$item -> tanggal}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> mentor}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> siswa}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> toko}}
                </td>
                <td class="px-6 py-4">
                    {{$item -> komentar}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


   
</body>
</html>