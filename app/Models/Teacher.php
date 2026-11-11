<?php

namespace App\Models;

use Database\Factories\TeacherFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nip', 'name', 'gender', 'subject', 'phone_number', 'status'])]
#[Table('teachers')]
class Teacher extends Model
{
    /** @use HasFactory<TeacherFactory> */
    use HasFactory;

    public function schoolClasses()
    {
        return $this->hasMany(SchoolClass::class, 'teacher_id');
    }
}
