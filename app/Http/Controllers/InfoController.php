<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\User;
use Illuminate\Http\Request;



class InfoController extends Controller
{
    public  function index()
    {

        if(auth()->user() == null)
        {
            return redirect('/dashboard')->with('danger', "Anda Harus Login Terlebih Dahulu Untuk ke halaman info PPDB, Anda Bisa Login disini ");
        }

        if(auth()->user()->keterangan_daftar == false){
            return redirect('/dashboard')->with('warning', "anda harus daftar dulu jika ingin mengakses halaman info ini");
        }
        $user = Daftar::find(1);
//        dd(Daftar::where("user_id", auth()->user()->id)->get()->first());
//        dd($user->user->name);
        return view('/info',[
            "title" => "Info PPDB",
            "userDaftar" => Daftar::latest()->get(),
            "user" => Daftar::where("user_id", auth()->user()->id)->get()->first()
        ]);
    }

    public function pembayaran(Request $request)
    {

        $user = User::find(auth()->user()->id);
        if($request->keterangan_pembayaran < 10){
            $uangUser =  $request->keterangan_pembayaran;
            $uangBayar = 10;
            $uangYangKurang = $uangBayar - $uangUser;
            return redirect('/info')->with('success', "Nominal anda tidak cukup yang anda harus bayar 10$");
        }else {
            $uangUser =  $request->keterangan_pembayaran;
            $uangBayar = 10;
            $kembalian = $uangUser - $uangBayar;
            $user->keterangan_pembayaran = true; 
            $user->save();
            if($uangUser == $uangBayar){
                $kembalianUang = "Pembayaran Berhasil";
            }else {
                $kembalianUang = "Anda berhasil melakukan pembayaran  " . $kembalian . "$" ;
            }
            return redirect('/info')->with('success', $kembalianUang);
        }





        $validated = $request->validate([
            "keterangan_pembayaran" => "required",
        ]);



    }
}
