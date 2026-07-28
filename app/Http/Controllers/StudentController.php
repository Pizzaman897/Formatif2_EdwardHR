<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        return "Menampilkan halaman daftar siswa";
    }

    public function create(Request $request)
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data siswa";
    }

    public function show(Request $request, $id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }

    public function edit(Request $request, $id)
    {
        return "Menampilkan halaman edit siswa dengan ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data siswa dengan ID: {$id}";
    }

    public function destroy(Request $request, $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
