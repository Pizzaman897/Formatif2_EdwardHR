<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $title = 'Sistem Sekolah - Ubah Kelas';
        $classes = [
        [
            'id' => 1,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso'
        ],
        [
            'id' => 2,
            'name' => 'XII TKJ 1',
            'grade' => 'XII',
            'major' => 'TKJ',
            'homeroom_teacher' => 'Siti Aminah'
        ]
];
        $class = collect($classes)->firstWhere('id', (int) $id) ?? $classes[0];

        return view('Classes.edit', [
            'title' => $title,
            'class' => $class,
            'majors' => [
                ['code' => 'AKL'],
                ['code' => 'TKJ'],
                ['code' => 'BD'],
            ],
            'teachers' => [
                ['name' => 'Budi Santoso'],
                ['name' => 'Siti Aminah'],
            ],
        ]);
    }
}
