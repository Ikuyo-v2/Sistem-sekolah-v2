<?php

namespace App\Models;

use Illuminate\database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('majors')]
#[Fillable(['code', 'name', 'description'])]
class Major extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class, 'major_id', 'id');
    }
}
