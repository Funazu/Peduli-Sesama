<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaksin;

class PemerintahController extends Controller
{
    public function userManagement() {
        return view('dashboard.pemerintah.user-management', [
            'title' => 'User Management',
            'account' => User::all()
        ])->with('i');
    }

    public function roleUpdate(Request $request, User $user) {
        $validatedData = $request->validate([
            'role' => 'required'
        ]);

        $user->update($validatedData);
        return redirect('/pemerintah/user-management');
    }

    public function laporanVaksin() {
        return view('dashboard.pemerintah.laporan', [
            'title' => "Laporan Vaksin",
            'vaksin' => Vaksin::all()
        ]);
    }
}
