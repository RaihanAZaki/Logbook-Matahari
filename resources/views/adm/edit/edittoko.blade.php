<html>
    <head>
        <title>Edit Toko</title>
        {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Edit Toko
                        </h1>
                        <form class="space-y-4 md:space-y-6"  method="POST" action="/admin/toko/{{$toko -> kode_toko}}">
                            @method('put')
                            @csrf
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Kode Toko</label>
                                <input type="text" name="kode_toko" id="text" value="{{$toko->kode_toko}}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " disabled required="">
                            </div>
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Nama Toko</label>
                                <input type="text" name="nama_toko" id="text" value="{{$toko->nama_toko}}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
                        </form>
                    </div>
                </div>
            </div>
          </section>
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    </body>
</html>
