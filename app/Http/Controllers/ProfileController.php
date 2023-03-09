<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;

class ProfileController extends Controller
{
    public function index() {
        return view('dashboard.profile.index', [
            'title' => "Profile",
            'data' => auth()->user(),
            'vaksin' => Vaksin::all()
        ])->with('i');
    }
}
