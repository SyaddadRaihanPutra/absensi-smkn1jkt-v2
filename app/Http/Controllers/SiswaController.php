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
         return view('dashboard.admin.siswa');
    }

    

    public function data()
    {
        $siswa = Siswa::query();

        return DataTables::of($siswa)
            ->addColumn('action', function ($siswa) {
                return '<button data-id="' . $siswa->id . '" class="btn-delete">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);

        

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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'NIS' => 'required|integer',
            'NAMA' => 'required|string|max:50',
            'KELAS' => 'required|string|max:50',
            'JURUSAN' => 'required|string|max:50',
        ]);

        // Create a new Siswa record
        $siswa = new Siswa();
        $siswa->NIS = $validatedData['NIS'];
        $siswa->NAMA_LENGKAP = $validatedData['NAMA'];
        $siswa->KELAS = $validatedData['KELAS'];
        $siswa->JURUSAN = $validatedData['JURUSAN'];

        // Save the record to the database
        $siswa->save();

        // Redirect to a success page or return a response as needed
        return redirect()->route('siswa.index')->with('success', 'Siswa added successfully.');
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
    public function destroy($id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();

    return response()->json(['message' => 'Siswa berhasil dihapus.']);
}
}
