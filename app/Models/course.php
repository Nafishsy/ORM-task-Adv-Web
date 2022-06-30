<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $table = 'course';
    
    public $timestamps = false;

    function Department()
    {
        return $this->belongsTo(Dept::class,'dept_id');
    }

    function MixCourseTeacher()
    {
        return $this->HasMany(MappedCourseTeacher::class,'c_id');
    }

    function MixCourseStudent()
    {
        return $this->HasMany(MappedCourseStudent::class,'c_id');
    }
}
