<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebContent extends Model
{
    // Table name (since it's not plural form of model)
    protected $table = 'web_content';  

    // Primary key
    protected $primaryKey = 'id';

    // No timestamps (since you didn’t mention created_at / updated_at)
    public $timestamps = false;

    // Fillable columns (after renaming columns with underscores instead of spaces)
    protected $fillable = [
        'HeroTitle',
        'Hero_Description',
        'Years',
        'Student',
        'Success',
        'Mission_Statement',
        'Vision_Statement',
    ];
}
