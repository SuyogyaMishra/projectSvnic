<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
     protected $table = 'files';
    public $timestamps = false;
    protected $fillable = ['file_name', 'file_path'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}