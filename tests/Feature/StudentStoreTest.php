<?php

use App\Models\Student;

it('can store a student', function () {
    $response = post(route('students.store'), [
        'nis' => '1234',
        'name' => 'Andi',
        'gender' => 'L',
        'major' => 'TKJ',
        'class' => 'XII TKJ 3',
    ]);

    $response->assertRedirect(route('students.index'));
    expect(Student::where('nis', '1234')->exists())->toBeTrue();
});
