<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappedCourseStudent extends Model
{
    use HasFactory;

    protected $table = 'mapstdnt_course';
    
    public $timestamps = false;

    function Student()
    {
        return $this->belongsTo(student::class,'s_id');
    }

    function Course()
    {
        return $this->belongsTo(course::class,'c_id');
    }
}
