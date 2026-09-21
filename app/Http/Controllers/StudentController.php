<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'gender' => 'Laki-laki',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],

            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'gender' => 'Laki-laki',
                'class' => 'XII AKL 1',
                'major' => 'AKL',
            ],
        ];

        return view('Students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('Students.create', [
            'title' => 'Sistem Sekolah - Catat Siswa',
        ]);
    }

    public function store()
    {
        return "Melakukan penambahan data siswa";
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'gender' => 'Laki-laki',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],

            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'gender' => 'Laki-laki',
                'class' => 'XII AKL 1',
                'major' => 'AKL',
            ],
        ];
        $student = collect($students)->firstWhere('id', (int) $id) ?? $students[0];

        return view('Students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Ubah Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '22100001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],

            [
                'id' => 2,
                'nis' => '22100002',
                'name' => 'Budi',
                'class' => 'XII AKL 1',
                'major' => 'AKL',
            ],
        ];

        return view('Students.edit', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function update(string $id)
    {
        return "Melakukan perubahan data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}
