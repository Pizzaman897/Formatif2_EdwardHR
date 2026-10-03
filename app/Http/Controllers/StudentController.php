<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        //Validasi
        $validatedrequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:L,P'],
            'major' => ['required', 'string', 'in:TKJ,AKL,BiD'],
            'class' => ['required', 'string']
        ]);

        //tambahkan data ke database
        student::create($validatedrequest);

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

    public function edit(Student $student, Request $request)
    {
        $title = "Sistem Sekolah - Ubah Siswa";
       
        return view('Students.edit', [
            'title' => $title,
            'students' => $student
        ]);
    }

    public function update(Student $student, Request $request)
    {
        //Validasi
        $validatedrequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis,' . $student->id],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:L,P'],
            'major' => ['required', 'string', 'in:TKJ,AKL,BiD'],
            'class' => ['required', 'string']
        ]);

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
