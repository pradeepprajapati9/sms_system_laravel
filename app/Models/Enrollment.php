<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table="enrollments";
    protected $primarykey="id";
    protected $fillable=['enroll_no',"course","student_name","join_date","fees"];
    use HasFactory;
}
