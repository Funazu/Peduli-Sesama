<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaksin;

class VaksinController extends Controller
{
    public function daftarVaksin() {
        return view('dashboard.vaksin.daftar', [
            'title' => "Pendaftaran Vaksin"
        ]);
    }

    public function postDaftarVaksin(Request $request) {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Vaksin::create($validatedData);
        return redirect('/profile');
    }
}
