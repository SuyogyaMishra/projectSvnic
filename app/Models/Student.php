<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Table name (optional if following convention)
    protected $table = 'students';

    // Mass assignable fields
    protected $fillable = [
        'admission_no',
        'roll_no',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'class',
        'section',
        'admission_year',
        'address',
        'phone',
        'email',
        'father_name',
        'mother_name',
        'guardian_phone',
        'status',
    ];

    // Cast fields
    protected $casts = [
        'date_of_birth' => 'date',
        'admission_year' => 'integer',
    ];

    // Optional: Custom accessors or methods
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . ($this->last_name ?? '');
    }
    public function marks()
    {
        return $this->hasMany(Mark::class);
    }
}
