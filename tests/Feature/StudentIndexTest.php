<?php

use App\Models\Student;

test('student index renders action links for each student', function () {
    $student = new Student([
        'nis' => '1234',
        'name' => 'Test Student',
        'gender' => 'Laki-laki',
        'major' => 'TKJ',
        'class' => 'X TKJ 1',
    ]);
    $student->id = 1;

    $response = $this->view('students.index', [
        'title' => 'Sistem Sekolah - Daftar Siswa',
        'students' => collect([$student]),
    ]);

    $response->assertSuccessful();
    $response->assertSee(route('students.show', $student), false);
    $response->assertSee(route('students.edit', $student), false);
    $response->assertSee(route('students.destroy', $student), false);
});
