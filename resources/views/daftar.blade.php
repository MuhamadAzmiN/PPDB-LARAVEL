<x-app-layout>
    <x-slot name="header">
        <!-- Header content here -->

        @if(session()->has('success'))

        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Anda Sudah Daftar - Silahkan Tunggu Hasil yang akan di umumkan Disini <a class="text-cyan-50" href="/info">Info PPDB</a></span>
        </div>

        @endif
    </x-slot>



    @if(auth()->user()->keterangan_daftar == true)

{{--    <div class="m-20 relative  p-7 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 mt-20 p-2.5">--}}
{{--        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Anda Berhasil Daftar</h5>--}}
{{--        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Silahkan Tunggu Hasil  , Semoga Hasilnya Memuaskan ya Silahkan cek hasil PPDB disini <a class="text-yellow-300" href="/info">Info PPDB</a></p>--}}
{{--        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">--}}
{{--            <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">--}}
{{--                <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>--}}
{{--                <div class="text-left rtl:text-right">--}}
{{--                    <div class="mb-1 text-xs">Download on the</div>--}}
{{--                    <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">--}}
{{--                <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>--}}
{{--                <div class="text-left rtl:text-right">--}}
{{--                    <div class="mb-1 text-xs">Get in on</div>--}}
{{--                    <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
        <header class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-16 mx-auto">
                <div class="items-center lg:flex">
                    <div class="w-full lg:w-1/2">
                        <div class="lg:max-w-lg">
                            <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Terima Kasih Telah Mendaftar di <span class="text-blue-500">PPDB SMK Wikrama Bogor</span></h1>
                            <p class="mt-3 text-gray-600 dark:text-gray-400">Kami sangat senang Anda bergabung dengan kami. <span class="font-medium text-blue-500">SMK Wikrama Bogor</span> siap membantu Anda meraih masa depan yang cerah.</p>

                        </div>
                    </div>
                    <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                        <img class="w-full h-full max-w-md" src="https://merakiui.com/images/components/Email-campaign-bro.svg" alt="ilustrasi email vektor">
                    </div>
                </div>
            </div>
        </header>
        <header class="bg-white dark:bg-gray-900">
            <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">Selamat Datang di SMK Wikrama Bogor</h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">Bersama kami, wujudkan masa depan gemilang dengan pendidikan yang berkualitas dan berkarakter.</p>
                        <div class="grid gap-6 mt-8 sm:grid-cols-2">
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Fasilitas Lengkap</span>
                            </div>
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Pembelajaran Berbasis Teknologi</span>
                            </div>
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Tenaga Pengajar Profesional</span>
                            </div>
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Lingkungan Belajar Nyaman</span>
                            </div>
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Kerjasama dengan Industri</span>
                            </div>
                            <div class="flex items-center text-gray-800 -px-3 dark:text-gray-200">
                                <svg class="w-5 h-5 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="mx-3">Kegiatan Ekstrakurikuler</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://akcdn.detik.net.id/visual/2017/09/27/6ae32a90-f9bd-44ce-b971-c7633d1410f4_169.jpg?w=650" alt="foto kacamata">
                </div>
            </div>
        </header>

    @else
        <div role="alert" class="m-20 rounded border-s-4 border-red-500 bg-red-50 p-4">
            <div class="flex items-center gap-2 text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path
                            fill-rule="evenodd"
                            d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                            clip-rule="evenodd"
                    />
                </svg>

                <strong class="block font-medium"> Warning </strong>
            </div>

            <p class="mt-2 text-sm text-red-700">
               Harap isi data benar sesuai data diri peserta didik
            </p>
        </div>
    <form class="mx-4 md:mx-20 mt-20" method="post" action="/daftar">

        @csrf
        <!-- Form content here -->
        <div class="space-y-8">
            <!-- Personal Information Section -->
            <div class="border-b border-gray-900/10 pb-8">
                <h2 class="text-lg font-semibold leading-6 text-gray-900">Masukan Data Diri </h2>


                <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                    <!-- First Name -->
                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-5 text-gray-900">Username</label>
                        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" autocomplete="given-name"
                               readonly
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>

                    <!-- Last Name -->
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-5 text-gray-900">Umur</label>
                        <input type="number" name="umur" id="umur" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-5 text-gray-900">Nis</label>
                        <input type="number" name="nis" id="nis" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-900">Email address</label>
                        <input readonly value="{{ auth()->user()->email }}" id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>

                    <!-- Email Address -->

                    <!-- Country -->
                    <div class="sm:col-span-3">
                        <label for="jurusan" class="block text-sm font-medium leading-5 text-gray-900">Jurusan</label>
                        <select id="jurusan" name="jurusan" autocomplete="country-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                            <option>Pariwisata</option>
                            <option>Teknik Komputer</option>
                            <option>Desain Grafis</option>
                        </select>
                    </div>
                    <div class="sm:col-span-3">
                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium leading-5 text-gray-900">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>
                    </div>


{{--                    <!-- Street Address -->--}}
                    <div class="sm:col-span-6">
                        <label for="street-address" class="block text-sm font-medium leading-5 text-gray-900">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>

{{--                    <!-- City -->--}}
                    <div class="sm:col-span-3">
                        <label for="city" class="block text-sm font-medium leading-5 text-gray-900">Tempat Tinggal</label>
                        <input type="text" name="tinggal" id="tinggal" autocomplete="address-level2" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>

{{--                    <!-- State / Province -->--}}
                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-5 text-gray-900">Tempat lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="address-level1" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                    </div>

{{--                    <!-- ZIP / Postal Code -->--}}
                    <div class="sm:col-span-3">
                        <label for="jenis_kelamin" class="block text-sm font-medium leading-5 text-gray-900">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" autocomplete="country-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
{{--                </div>--}}
            </div>

            <!-- Notifications Section (if applicable) -->

        </div>

        <!-- Form Actions -->
        <div class="mt-6 flex items-center justify-end gap-x-4">
            <button type="button" class="text-sm font-medium leading-5 text-gray-900">Cancel</button>
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                Save
            </button>
        </div>
    </form>
    @endif




</x-app-layout>
