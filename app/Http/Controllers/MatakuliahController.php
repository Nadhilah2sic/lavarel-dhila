<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Menampilkan daftar matakuliah.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    /**
     * Menampilkan form tambah matakuliah.
     */
    public function create()
    {
        return "Menampilkan form tambah data matakuliah";
    }

    /**
     * Menyimpan data matakuliah baru.
     */
    public function store(Request $request)
    {
        return "Proses menyimpan data matakuliah baru";
    }

    /**
     * Menampilkan detail matakuliah berdasarkan kode/ID.
     */
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }

        return "Masukkan kode matakuliah!";
    }

    /**
     * Menampilkan form edit matakuliah.
     */
    public function edit($id)
    {
        return "Menampilkan form edit matakuliah dengan ID " . $id;
    }

    /**
     * Memperbarui data matakuliah.
     */
    public function update(Request $request, $id)
    {
        return "Proses memperbarui data matakuliah dengan ID " . $id;
    }

    /**
     * Menghapus data matakuliah.
     */
    public function destroy($id)
    {
        return "Proses menghapus data matakuliah dengan ID " . $id;
    }
}