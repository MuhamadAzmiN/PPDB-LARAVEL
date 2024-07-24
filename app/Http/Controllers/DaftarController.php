<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user() == null)
        {
            return redirect('/dashboard')->with('danger', "Anda Harus Login Terlebih Dahulu untuk ke halaman Pendaftaran, Anda Bisa Login disini ");
        }
        $daftar = Daftar::find(1);
//        $user = User::find(auth()->id());
//        dd($user->keterangan_daftar);
    // Contoh: Mendapatkan user dengan ID 1

// Memanggil metode daftar() untuk mendapatkan objek Daftar terkait
//
        return view('/daftar',[

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $daftar = Daftar::where('nis', $request->nis )->first();
        if($daftar){
            return redirect('/daftar')->with('success', "NIS Sudah Terdaftar  / User Sudah Terdaftar");
        }


        $validatedData = $request->validate([
            "umur" => "required",
            "jurusan" => "required",
            "asal_sekolah" => "required",
            "tempat_lahir" => "required",
            "jenis_kelamin" => "required",
            "tanggal_lahir" => "required",
            "tinggal" => "required",
            "nis" => "required"
        ]);

        $user = User::find(auth()->id());
        $user->keterangan_daftar = true;

        $user->save();


// Jika tidak ada error, lanjutkan dengan proses menyimpan data
        $validatedData["user_id"] = auth()->user()->id;

        Daftar::create($validatedData);

        return redirect('/daftar')->with('success', 'Data berhasil ditambahkan');







    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
