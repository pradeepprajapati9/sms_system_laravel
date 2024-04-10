<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";
    protected $primarykey = 'id';
    protected $fillable = ["course_name", "course_duration", "course_description","course_price"];
    use HasFactory;
}
