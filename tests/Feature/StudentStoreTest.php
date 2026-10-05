<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('student can be created', function () {
    $response = $this->post(route('students.store'), [
        'nis' => '1234',
        'name' => 'Test Student',
        'gender' => 'Laki-laki',
        'major' => 'TKJ',
        'class' => 'X TKJ 1',
    ]);

    $response->assertRedirect(route('students.index'));

    $this->assertDatabaseHas('students', [
        'nis' => '1234',
        'name' => 'Test Student',
        'gender' => 'Laki-laki',
        'major' => 'TKJ',
        'class' => 'X TKJ 1',
    ]);
});
