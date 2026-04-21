<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // WAJIB ADA untuk konek database

class JadwalController extends Controller
{
    // 1. Menampilkan semua data
    public function index() {
        $jadwal = DB::table('jadwals')->get();
        return view('halaman_jadwal', compact('jadwal'));
    }

    // 2. Menyimpan data baru
    public function store(Request $request) {
        DB::table('jadwals')->insert([
            'nama_olahraga' => $request->nama_olahraga,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
            'tanggal' => $request->tanggal,
        ]);
        return back();
    }

    // 3. Menghapus data
    public function delete($id) {
        DB::table('jadwals')->where('id', $id)->delete();
        return back();
    }

    // 4. Mengupdate data (Edit)
    public function update(Request $request) {
        DB::table('jadwals')->where('id', $request->id)->update([
            'nama_olahraga' => $request->nama_olahraga,
            'lokasi' => $request->lokasi,
            'jam' => $request->jam,
            'tanggal' => $request->tanggal,
        ]);
        return back();
    }
}