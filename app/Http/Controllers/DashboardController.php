<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            $role = "Administrator";
            return view('dashboard.admin.index', compact('role')); //ROLE ADMIN
        }
        if ($role == '2') {
            $role = "piket";
            return view('dashboard.piket.index', compact('role')); //ROLE guru piket
        }
        if ($role == '3') {
            $role = "guru";
            return view('dashboard.guru.index', compact('role')); //ROLE guru dan orang tua 
        }
        if ($role == '5') {
            $role = "walas";
            return view('dashboard.walas.index', compact('role')); //ROLE walikeas
        }
        if ($role == '6') {
            $role = "ketulas";
            return view('dashboard.ketulas.index', compact('role')); //ROLE ketua kelas 
        }
    }
}
