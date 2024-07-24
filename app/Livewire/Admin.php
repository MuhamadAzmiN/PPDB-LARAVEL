<?php

namespace App\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class Admin extends Component
{
    public $cari = '';
    public $id;

    protected $rules = [
        'name' => 'required|string|min:3',
    ];

    use WithPagination;

    public function submit()
    {
        $this->validate();

        // Logika untuk memproses data form
        // Misalnya, menyimpan ke database atau melakukan tindakan lain

        // Setelah berhasil
        session()->flash('message', 'Form successfully submitted.');
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->cari . '%')->paginate(5); // Ubah paginate(1) menjadi paginate(10) untuk menampilkan lebih banyak data

        return view('livewire.admin', [
            'title' => 'Data User',
            'jumlahUser' => User::count(),
            'user' => $users,
        ]);
    }

    public function updatingCari()
    {
        $this->resetPage();

    }


    public  function destroy($id)
    {
        if($id){
           $data = User::find($id);
           $data->delete();

        }
    }

    public  function detail($id)
    {
       return Redirect::route('detail', ['id' => $id]);
    }
}
