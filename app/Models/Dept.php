<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    use HasFactory;

    protected $table = 'department';
    public $timestamps = false;


    public function students()
    {
        return $this->hasMany(student::class,'dept_id');
    }

    public function teachers()
    {
        return $this->HasMany(teacher::class,'dept_id');
    }

    public function courses()
    {
        return $this->HasMany(course::class,'dept_id');
    }
    
}
