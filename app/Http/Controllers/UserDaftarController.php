<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\User;
use Illuminate\Http\Request;


class UserDaftarController extends Controller
{
    public  function index()
    {
        return view('admin.UserDaftar', [
            "title" => "User Daftar",
            
            "daftar" => Daftar::latest()->get()
        ]);
    }

    public function store(Request $request, $id)
    {
        $daftarUser = Daftar::find($id);

        if ($daftarUser) {
            $daftarUser->user->keterangan_keterima = true;
            $daftarUser->user->save(); // Save the User model
            return redirect('UserDaftar')->with('success', 'User updated successfully.');
        }
        return redirect('UserDaftar')->with('error', 'User not found.');

    }
    public function detail($id)
    {
        $user = User::findOrFail($id);
        return view('admin.detail', [
            "title" => "Detail User",
            "user" => $user
            
        ]);
    }

    public function destroy($id)
    {
        $userDaftar = Daftar::find($id);
        if ($userDaftar && $userDaftar->user) {
            $userDaftar->user->keterangan_daftar = false;
            $userDaftar->user->save();
        }
        $userDaftar->delete();
        return redirect('UserDaftar')->with('success', 'User deleted successfully.');
    }

    

}
