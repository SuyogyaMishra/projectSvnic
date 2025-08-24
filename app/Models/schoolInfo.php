<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolInfo  extends Model
{
    use HasFactory;

    // if your table name is `school_stats`
    protected $table = 'school_info';

    // if your table doesn't use Laravel default timestamps (created_at, updated_at)
    public $timestamps = false;

    // fields that are fillable
    protected $fillable = [
        'Students',
        'Teachers',
    ];
}
