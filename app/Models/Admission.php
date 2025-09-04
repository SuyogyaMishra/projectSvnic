<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $table = 'admissions_table';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'dob',
        'gender',
        'class_applied',
        'stream',
        'address',
    ];
}
