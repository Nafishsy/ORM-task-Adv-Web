<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'student';
    public $timestamps = false;

    function Department()
    {
        return $this->belongsTo(Dept::class,'dept_id');
    }

    public function courses()
    {
        return $this->HasMany(MappedCourseStudent::class,'s_id');
    }
}
