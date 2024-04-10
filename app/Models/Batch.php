<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = "batches";
    protected $primarykey = 'id';
    protected $fillable = ["batch_name", "course", "start_date"];
    use HasFactory;
}
