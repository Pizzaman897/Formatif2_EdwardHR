<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
];


        return view('Teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]); ;
    }

    public function create()
    {
        return view('Teachers.create', [
            'title' => 'Sistem Sekolah - Catat Guru',
        ]);
    }

    public function store()
    {
        return "Melakukan penambahan data guru";
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Guru';
        $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
];
        $teacher = collect($teachers)->firstWhere('id', (int) $id) ?? $teachers[0];


        return view('Teachers.show', [
            'title' => $title,
            'teacher' => $teacher
        ]); 
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Ubah Guru';
        $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
];
        $teacher = collect($teachers)->firstWhere('id', (int) $id) ?? $teachers[0];


        return view('Teachers.edit', [
            'title' => $title,
            'teacher' => $teacher
        ]); 
    }

    public function update(string $id)
    {
        return "Melakukan perubahan data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}
