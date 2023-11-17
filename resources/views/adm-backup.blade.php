<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
      /* Tambahkan CSS khusus untuk mengatur scrollbar */
      .scrollbar {
          /* Lebar maksimum untuk konten */
          max-height: 500px; /* Sesuaikan sesuai kebutuhan Anda */
      }
    </style>
    <title>Dashboard Admin</title>
</head>
<body style="background: #F5F7FF">
    <div class="flex h-screen w-full">
        <!-- Sidebar Kiri -->
        <div class="flex h-screen w-16 flex-col justify-between border-e bg-white">
            <!-- Konten Sidebar -->
            <div class="flex h-screen w-16 flex-col justify-between border-e bg-white">
                <div>
                  <div class="inline-flex h-16 w-16 items-center justify-center">
                    <span
                      class="grid h-10 w-10 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600"
                    >
                      L
                    </span>
                  </div>
              
                  <div class="border-t border-gray-100">
                    <div class="px-2">
                      <div class="py-4">
                        <a
                          href="/admin"
                          class="t group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                            />
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                          </svg>
              
                          <span
                            class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                          >
                            General
                          </span>
                        </a>
                      </div>
              
                      <ul class="space-y-1 border-t border-gray-100 pt-4">
                        <li>
                          <a
                            href="/admin/toko"
                            class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 opacity-75"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                              />
                            </svg>
              
                            <span
                              class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                            >
                              Toko
                            </span>
                          </a>
                        </li>
              
                        <li>
                          <a
                            href="/admin/mentor"
                            class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 opacity-75"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                              />
                            </svg>
              
                            <span
                              class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                            >
                              Mentor
                            </span>
                          </a>
                        </li>
              
                        <li>
                          <a
                            href="/admin/siswa"
                            class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 opacity-75"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                              />
                            </svg>
              
                            <span
                              class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                            >
                              Siswa
                            </span>
                          </a>
                        </li>

                        <li>
                          <a
                            href="/admin/jabatan"
                            class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-5 w-5 opacity-75"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                              />
                            </svg>
              
                            <span
                              class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                            >
                              Jabatan
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              
                <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 bg-white p-2">
                  <form action="/logout">
                    <button
                      type="submit"
                      class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        />
                      </svg>
              
                      <span
                        class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100"
                      >
                        Logout
                      </span>
                    </button>
                  </form>
                </div>
              </div>
        </div>
    
        <div class="flex flex-col flex-1">
            <div class="bg-gray-100 px-4 py-3">
                <div class="mx-auto flex max-w-3xl items-center justify-center">
                  <button class="swiper-prev-button hidden hover:text-gray-500 sm:block sm:rounded sm:text-gray-700 sm:transition" aria-label="Previous slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rtl:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                  </button>
              
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <p class="text-center text-sm font-medium text-gray-900">
                          Love Alpine JS?
                          <a href="#" class="block underline sm:inline-block">Check out this new course!</a>
                        </p>
                      </div>
              
                      <div class="swiper-slide">
                        <p class="text-center text-sm font-medium text-gray-900">
                          Love Tailwind CSS?
                          <a href="#" class="block underline sm:inline-block">Check out this new course!</a>
                        </p>
                      </div>
              
                      <div class="swiper-slide">
                        <p class="text-center text-sm font-medium text-gray-900">
                          Love Laravel?
                          <a href="#" class="block underline sm:inline-block">Check out this new course!</a>
                        </p>
                      </div>
                    </div>
                  </div>
              
                  <button class="swiper-next-button hidden hover:text-gray-500 sm:block sm:rounded sm:text-gray-700 sm:transition" aria-label="Next slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rtl:rotate-180" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                  </button>
                </div>
            </div>

            <section class="h-full p-8 overflow-y-auto">
                <div class="max-w-screen-xl mx-auto">
                  <div class="flex flex-col md:flex-row gap-8">
                    <!-- Card 1 -->
                    <a href="#" class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex items-center transform transition-transform hover:scale-105">
                      <div>
                        <h5 class="text-2xl font-semibold text-gray-900 dark:text-white">Total Mentor</h5>
                        <p class="mt-1 text-sm text-gray-700 dark:text-gray-400">Description for the first card.</p>
                      </div>
                      <div class="w-16 h-16 p-2 bg-indigo-600 bg-opacity-75 rounded-sm ml-20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <!-- SVG path here -->
                        </svg>
                      </div>
                    </a>
              
                    <!-- Card 2 -->
                    <a href="#" class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex items-center transform transition-transform hover:scale-105">
                      <div>
                        <h5 class="text-2xl font-semibold text-gray-900 dark:text-white">Total Siswa</h5>
                        <p class="mt-1 text-sm text-gray-700 dark:text-gray-400">Description for the second card.</p>
                      </div>
                      <div class="w-16 h-16 p-2 bg-blue-600 bg-opacity-75 rounded-sm ml-20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <!-- SVG path here -->
                        </svg>
                      </div>
                    </a>
              
                    <!-- Card 3 -->
                    <a href="#" class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex items-center transform transition-transform hover:scale-105">
                      <div>
                        <h5 class="text-2xl font-semibold text-gray-900 dark:text-white">Total Toko</h5>
                        <p class="mt-1 text-sm text-gray-700 dark:text-gray-400">Description for the third card.</p>
                      </div>
                      <div class="w-16 h-16 p-2 bg-green-600 bg-opacity-75 rounded-sm ml-20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <!-- SVG path here -->
                        </svg>
                      </div>
                    </a>
                  </div>
                
                  <div class="flex flex-col sm:flex-row sm:space-x-6">
                    <div class="w-full sm:w-2/3 p-4 mt-10 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 scrollbar overflow-y-auto max-h-screen">
                        <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-10">Daftar Lengkap</h5>
                        <!-- Tambahkan konten yang lebih panjang -->
                        <div class="w-full sm:w-3/3 p-4 mt-5 text-left bg-white border border-gray-200 rounded-lg shadow \ dark:bg-gray-800 dark:border-gray-700" style="max-height:150px">
                          <h5 class="mb-2 text-xl font-bold text-gray-700 dark:text-white">Toko</h5>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">This is the taller column. It contains more content and will expand as needed.</p>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">You can add more content here.</p>
                          <!-- Add more content as needed -->
                        </div>
                        <div class="w-full sm:w-3/3 p-4 mt-5 text-left bg-white border border-gray-200 rounded-lg shadow \ dark:bg-gray-800 dark:border-gray-700" style="max-height:150px">
                          <h5 class="mb-2 text-xl font-bold text-gray-700 dark:text-white">Toko</h5>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">This is the taller column. It contains more content and will expand as needed.</p>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">You can add more content here.</p>
                          <!-- Add more content as needed -->
                        </div>
                        <!-- Konten yang lebih panjang akan membuat kolom ini lebih tinggi -->
                        <div class="w-full sm:w-3/3 p-4 mt-5 text-left bg-white border border-gray-200 rounded-lg shadow \ dark:bg-gray-800 dark:border-gray-700" style="max-height:150px">
                          <h5 class="mb-2 text-xl font-bold text-gray-700 dark:text-white">Toko</h5>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">This is the taller column. It contains more content and will expand as needed.</p>
                          <p class="mb-5 text-base text-gray-500 sm:text-sm dark:text-gray-400">You can add more content here.</p>
                          <!-- Add more content as needed -->
                        </div>
                    </div>
                    <div class="w-full sm:w-1/3 p-4 mt-10 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700" style="max-height:200px">
                        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Taller Column</h5>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">This is the taller column. It contains more content and will expand as needed.</p>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">You can add more content here.</p>
                        <!-- Add more content as needed -->
                    </div>
                    
                </div>
            </section>
        </div>

    

        <script>
            new Swiper('.swiper', {
              effect: 'fade',
              loop: true,
              autoplay: {
                delay: 5000,
              },
              fadeEffect: {
                crossFade: true,
              },
              navigation: {
                prevEl: '.swiper-prev-button',
                nextEl: '.swiper-next-button',
              },
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>