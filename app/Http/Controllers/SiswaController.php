<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;


class SiswaController extends Controller
{
   
    public function index(Request $request)
    {
        $kelasOptions = Kelas::pluck('kelas_id','id'); // Untuk opsi dropdown kelas
         return view('dashboard.admin.siswa', compact('kelasOptions'));
    }

    
    public function siswa()
    {
    
            $kelasOptions = Kelas::pluck('kelas_id','id'); // Untuk opsi dropdown kelas
            return view('dashboard.admin.siswa', compact('kelasOptions'));
    }

    public function data()
    {
        $siswa = Siswa::select(['NIS', 'NAMA_LENGKAP', 'KELAS', 'JURUSAN']);

        return DataTables::of($siswa)->make(true);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:users',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $password = Hash::make('default_password'); // Ganti dengan password yang diinginkan

        User::create([
            'name' => $request->nama,
            'nip' => $request->nip, // Asumsi email dan NIP sama
            'password' => $password,
            'role' => 2,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('users.siswa')->with('success', 'Siswa added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
 
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
