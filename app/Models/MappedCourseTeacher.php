<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappedCourseTeacher extends Model
{
    use HasFactory;

    protected $table = 'maptchr_course';
    
    public $timestamps = false;

    function Teacher()
    {
        return $this->belongsTo(teacher::class,'t_id');
    }

    function Course()
    {
        return $this->belongsTo(course::class,'c_id');
    }

}
