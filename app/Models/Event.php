<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $table = 'event';
    public $timestamps = false;
    protected $fillable = ['title', 'event_date', 'description', 'file_id'];

    public function file()
    {
        return $this->belongsTo(File::class);
    }
}