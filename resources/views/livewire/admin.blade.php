<div>



    <section class="container px-4 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">User Login</h2>

                    <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400"> {{ $jumlahUser }} User</span>
                </div>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Daftar Daftar User</p>
            </div>

            <div class="flex items-center mt-4 gap-x-3">

            </div>
        </div>

        <div class="mt-6 md:flex md:items-center md:justify-between">


            <div class="relative flex items-center mt-4 md:mt-0">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>
                <input type="text" placeholder="Search" wire:model.live="cari" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">

            </div>
        </div>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">No</th>
                                <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Nama</th>
                                <th scope="col" class="px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Email</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Keterangan Daftar</th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Pembayaran</th>
                                <th scope="col" class="px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Action</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @php $found = false; @endphp
                            @foreach($user as $item)
                                @if($item)
                                    @php $found = true; @endphp
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                            <div>
                                                <h2 class="font-medium text-gray-800 dark:text-white ">{{ $loop->iteration }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">{{ $item->name }}</td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">{{ $item->email }}</td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            @if($item->keterangan_daftar)
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">Sudah Daftar</div>
                                            @else
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-red-500 gap-x-2 bg-red-100/60 dark:bg-red-800">Belum Daftar</div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            @if($item->pembayaran)
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">Sudah Bayar</div>
                                            @else
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-red-500 gap-x-2 bg-red-100/60 dark:bg-red-800">Belum Bayar</div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <button class="text-red-600" wire:click="destroy({{ $item->id }})">Hapus</button>
                                            <a class="text-yellow-300" href="{{ route('item.detail', ['id' => $item->id]) }}">Detail</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            @if(!$found)
                                <tr>
                                    <td colspan="6" class="px-4 py-4 text-sm text-center text-gray-500 dark:text-gray-400">Tidak ada hasil yang ditemukan.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
            <div class="text-sm text-gray-500 dark:text-gray-400">
                Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
            </div>

            <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                {{ $user }}
            </div>
        </div>
    </section>


</div>
