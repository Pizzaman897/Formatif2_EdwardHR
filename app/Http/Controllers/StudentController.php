<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select('id', 'nis', 'name', 'class', 'major')
        ->get();
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

    public function store(StoreRequest $request)
    {
        //Validasi
        $validatedrequest = $request->validated();

        //tambahkan data ke database
        Student::create($validatedrequest);

        //handle if success
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('Students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Ubah Siswa";

        return view('Students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function update(Student $student, UpdateRequest $request)
    {
        //Validasi
        $validatedrequest = $request->validated();

        //update data
        $student->update($validatedrequest);

        //handle if success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
