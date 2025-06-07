<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $data = karyawan::all();
        return response()->json($data);
    }

    // Menampilkan detail karyawan berdasarkan ID
    public function show($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return response()->json($karyawan);
    }

    // Menambah data karyawan baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'handphone' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);
        $karyawan = karyawan::create($validatedData);
        return response()->json($karyawan, 201);
    }

    // Mengubah data karyawan berdasarkan ID
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'jenis_kelamin' => 'sometimes|required|string',
            'handphone' => 'sometimes|required|string|max:15',
            'alamat' => 'sometimes|required|string',
        ]);
        $karyawan = karyawan::findOrFail($id);
        $karyawan->update($validatedData);
        return response()->json($karyawan);
    }

    // Menghapus data karyawan berdasarkan ID
    public function destroy($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $karyawan->delete();
        return response()->json(null, 204);
    }
}
