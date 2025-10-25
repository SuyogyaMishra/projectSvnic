<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
     
    protected $primaryKey = 'id';

    protected $fillable = [
    'name',
    'fathersname',
    'email',
    'password',
    'role',
    'status',
];
}
