<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use Illuminate\Http\Request;

class StudentController
{
    public function index(Request $request): \Illuminate\Contracts\View\View
    {
        $class = $request->string('class')->toString();
        $major = $request->string('major')->toString();

        $students = Student::query()
            ->with(['major', 'schoolClass'])
            ->when($request->filled('search'), function ($query) use ($request): void {
                $search = $request->string('search')->toString();

                $query->where(function ($query) use ($search): void {
                    $query->where('nis', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%");
                });
            })
            ->when($class,fn($query) => $query->whereHas('schoolClass', fn ($query) => $query->where('name', $request->string('class')->toString()))
            )
            ->when($major,fn($query) => $query->whereHas('major', fn ($query) => $query->where('name', $request->string('major')->toString())
            ))
            ->orderBy('id')
            ->paginate(10)
            ->withQueryString();
        $schoolClasses = ['10 AKL', '10 BID', '10 TKJ 1','11 AKL', '11 BID', '11 TKJ 1', '12 AKL', '12 BID', '12 TKJ 1'];
        $majors = ['AKL', 'BID', 'TKJ'];
        return view('students.index', [
            'title' => 'Sistem Sekolah - Daftar Siswa',
            'students' => $students,
            'schoolClasses' => $schoolClasses,
            'majors' => $majors,
        ]);
    }
    
    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view(
            'students.show', 
            [
            'title' => $title,
            'student' => $student
            ]
        );
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';

        return view('students.create', [
            'title' => $title,

        ]);
    }
    public function edit(Student $student)
    {
        $title = 'Sistem Sekolah - Edit Siswa';
        return view('students.edit', [

            'title' => $title,
            'student' => $student

        ]);
    }
    public function store(StoreRequest $request)
    {
        $validatedRequest = $request-> validated();

        Student::create($validatedRequest);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
    public function update(UpdateRequest $request, Student $student)
    {
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
