<x-app-layout :title="$title">

    <style>
        /* Menyembunyikan menu secara default */
        #menuContent {
            display: none;
            animation-delay: inherit;
            transition: opacity 0.3s ease, transform 0.3s ease; /* Transisi untuk opacity dan transform */
        }

        /* Menampilkan menu ketika tidak dalam keadaan hidden */
        #menuContent:not(.hidden) {
            display: block;
            opacity: 1;
            animation-delay: inherit;
            transform: translate(-50%, 0); /* Translasi untuk membuat tampilan terpusat */
        }
    </style>




    <x-slot name="header">

            @if(auth()->user()->keterangan_pembayaran == false &&  auth()->user()->keterangan_daftar == true)


            <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Success alert!</span>  <a  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="cursor-pointer" type="button"><span style="color: black" class="font-black">Klik Disini </span>Untuk Pembayaran</a>
            </div>
                @else

              @endif
                @if(auth()->user()->keterangan_pembayaran == true && auth()->user()->keterangan_keterima === null)

                <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Informasi !</span> Silahkan tunggu hasil anda keterima atau tidak disini
                    </div>
                </div>
                @endif
                @if(auth()->user()->keterangan_keterima !== null)

                    <div class="flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Informasi ! Halo {{ auth()->user()->name }} Hasil PPDB Anda Sudah bisa Dicek Ya</span>
                        </div>
                    </div>
                 @endif



    </x-slot>

    <!-- Footer Actions -->
    <x-slot name="footer">
        <div class="flex justify-end mt-8">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200 font-semibold text-sm">Terms of Service</a>
            <span class="mx-4 text-gray-500 dark:text-gray-400">•</span>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200 font-semibold text-sm">Privacy Policy</a>
        </div>
    </x-slot>
        @if (session()->has('success'))

        <div  role="alert" class="m-10rounded-xl border border-gray-100 bg-white p-4">
            <div class="flex items-start gap-4">
    <span class="text-green-600">
      <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="h-6 w-6"
      >
        <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        />
      </svg>
    </span>


                <div class="flex-1">
                    <strong class="block font-medium text-gray-900"> Pembayaran </strong>

                    <p class="mt-1 text-sm text-gray-700">{{ session('success') }}</p>
                </div>

                <button class="text-gray-500 transition hover:text-gray-600">
                    <span class="sr-only">Dismiss popup</span>


                </button>
            </div>
        </div>
        @endif


    <!-- Modal toggle -->


    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Lakukan <Pembayaran></Pembayaran>
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('pembayaran') }}" method="post">
                        @csrf
                        <div>
                            <label for="bayar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan Nota Bayar</label>
                            <input type="number" name="keterangan_pembayaran" id="keterangan_pembayaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukan Nominal" required>
                        </div>

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bayar</button>


                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="m-20">
        <h2 class="sr-only">Steps</h2>

        <div>
            <div class="overflow-hidden rounded-full {{ auth()->user()->keterangan_pembayaran == true ? "bg-blue-500" : "bg-gray-200" }}">
                <div class="h-2 w-1/2 rounded-full {{ auth()->user()->keterangan_daftar == true ? "bg-blue-500" : "bg-gray-200" }}"></div>
            </div>

            <ol class="mt-4 grid grid-cols-3 text-sm font-medium text-gray-500">
                <li class="flex items-center justify-start text-blue-600 sm:gap-1.5">
                    <span class="hidden sm:inline"> Daftar </span>

                    <svg
                            class="size-6 sm:size-5"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                    >
                        <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                        />
                    </svg>
                </li>

                <li class="flex items-center justify-center text-blue-600 sm:gap-1.5">
                    <span class="hidden sm:inline"> Wawancara </span>

                    <svg
                            class="size-6 sm:size-5"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                    >
                        <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                        />
                        <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                    </svg>
                </li>

                <li class="flex items-center justify-end sm:gap-1.5">
                    <span class="hidden sm:inline"> Payment </span>

                    <svg
                            class="size-6 sm:size-5"
                            xmlns="http://www.w3.org/2000/svg"
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
                </li>
            </ol>
        </div>
    </div>
        @php


        $userLulus = auth()->user()->keterangan_keterima;

         @endphp
        @if(auth()->user()->keterangan_pembayaran == true)
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="SMK Wikrama Bogor" class="w-24 ml-4">
                </div>
                <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">From the blog</h1>
                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt, laudantium quia tempore delect
                </p>
            </div>

            <div class="mt-8">
                <div>
                    @php
                        $keteranganKeterima = auth()->user()->keterangan_keterima;
                    @endphp
                    @if($keteranganKeterima === true)
                        <div class="relative z-10 w-full rounded-md h-96 bg-green-500 flex justify-center items-center">
                            <div class="flex flex-col md:flex-row items-center text-center text-white">
                                <div class="p-4">
                                    <h2 class="text-2xl md:text-4xl font-bold mb-4">SELAMAT! ANDA DINYATAKAN LULUS SELEKSI MASUK SMK WIKRAMA BOGOR 2024</h2>
                                    <p class="text-sm mb-4">KAMI MENUNGGU KEHADIRAN ANDA UNTUK MENDAFTAR ULANG DAN MELANJUTKAN PROSES ADMINISTRASI.</p>
                                </div>
                                <img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="SMK Wikrama Bogor" class="w-20 md:w-40"> <!-- Ubah ukuran gambar sesuai kebutuhan -->
                            </div>
                        </div>
                    @elseif($keteranganKeterima === false)
                        <div class="relative z-10 w-full rounded-md h-96 bg-red-500 flex justify-center items-center">
                            <div class="flex flex-col md:flex-row items-center text-center text-white">
                                <div class="p-4">
                                    <h2 class="text-2xl md:text-4xl font-bold mb-4">ANDA DINYATAKAN TIDAK LULUS SELEKSI MASUK SMK WIKRAMA BOGOR 2024</h2>
                                    <p class="text-sm mb-4">MASIH ADA KESEMPATAN MENDAFTAR DAN MENGUKUTI TES DAFTAR 2025 ATAU SELEKSI MANDIRI</p>
                                </div>
                                <img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="SMK Wikrama Bogor" class="w-20 md:w-40"> <!-- Ubah ukuran gambar sesuai kebutuhan -->
                            </div>
                        </div>
                    @elseif($keteranganKeterima === null)
                        <div class="relative z-10 w-full rounded-md h-96 bg-blue-500 flex justify-center items-center">
                            <div class="flex flex-col md:flex-row items-center text-center text-white">
                                <div class="p-4">
                                    <h2 class="text-2xl md:text-4xl font-bold mb-4">TUNGGU HASIL SELEKSI PPDB SMK WIKRAMA BOGOR 2024</h2>
                                    <p class="text-sm mb-4">Harap bersabar, hasil seleksi akan segera diumumkan. Pastikan Anda selalu memantau informasi terbaru dari kami.</p>
                                </div>
                                <img src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="SMK Wikrama Bogor" class="w-20 md:w-40"> <!-- Ubah ukuran gambar sesuai kebutuhan -->
                            </div>
                        </div>
                    @endif

                    <div class="relative z-20 max-w-lg p-7 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <div class="max-w-lg mx-auto"> <!-- Tambahkan max-w-lg untuk membatasi lebar div -->
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Identitas:</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-300">
                                Nama: {{ $user->user->name }}<br>
                                Usia: {{ $user->umur }} Tahun<br>
                                Jurusan: {{ $user->jurusan }}<br>
                                Email: {{ $user->user->email }}
                            </p>
                        </div>

                        <p class="mt-3 text-sm text-blue-500"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@if(auth()->user()->keterangan_pembayaran == false)

    <div class="flex justify-center items-center">
        <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400">Jul 10, 2024</span>
                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-red-600 rounded cursor-pointer hover:bg-red-500" tabindex="0" role="button">Pemberitahuan</a>
            </div>

            <div class="mt-2">
                <a href="#" class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">Silahkan Selesaikan Pembayaran</a>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Untuk melihat informasi lebih lanjut mengenai PPDB, mohon segera selesaikan pembayaran Anda. Jika ada pertanyaan, hubungi kami melalui kontak yang tersedia.</p>
            </div>

            <div class="flex items-center justify-between mt-4">
                <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">Lihat Detail</a>

                <div class="flex items-center">
                    <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80" alt="avatar">
                    <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">Admin PPDB</a>
                </div>
            </div>
        </div>
    </div>
@endif

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleMenu');
            const menuContent = document.getElementById('menuContent');

            toggleButton.addEventListener('click', function() {
                menuContent.classList.toggle('hidden');
            });
        });
    </script>
</x-app-layout>
