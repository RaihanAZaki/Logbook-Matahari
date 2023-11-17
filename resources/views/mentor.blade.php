<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logbook Mentor</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
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
                <button type="submit" class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0" style="background-color: #B52544;">Logout</button>
            </form>
        </div>
        </div>
    </nav>
    

    <section>
        <div
          class="mx-auto max-w-screen px-4 py-32 lg:flex mt-12 lg:items-center"
        >
          <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
              Hallo {{Auth::user()->name}}
              <strong class="font-extrabold sm:block" style="color: #B52544">
                Selamat Datang
              </strong>
            </h1>
      
            <p class="mt-4 sm:text-xl/relaxed">
              Mohon untuk mengisi formulir logbook harian anda dengan melakukan klik button dibawah ini!
            </p>
      
            <div class="mt-8 flex flex-wrap justify-center gap-4">
              <a
                class="block w-full rounded px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto" style="background: #B52544"
                href="/mentor/formulir"
              >
                Formulir Logbook
              </a>
      
              <a
                class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                href="/mentor/histori"
              >
                Histori Logbook
              </a>
            </div>
          </div>
        </div>
      </section>

      @if(session('success'))
      <script>
          alert("{{ session('success') }}");
      </script>
      @endif
</body>
</html>