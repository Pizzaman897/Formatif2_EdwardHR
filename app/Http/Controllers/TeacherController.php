<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        return "Menampilkan halaman daftar guru";
    }

    public function create(Request $request)
    {
        return "Menampilkan halaman tambah guru";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data guru";
    }

    public function show(Request $request, $id)
    {
        return "Menampilkan guru dengan ID: {$id}";
    }

    public function edit(Request $request, $id)
    {
        return "Menampilkan halaman edit guru dengan ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "Melakukan perubahan data guru dengan ID: {$id}";
    }

    public function destroy(Request $request, $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}
