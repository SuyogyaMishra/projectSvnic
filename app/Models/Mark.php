<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    // Table name (optional — Laravel infers it as 'marks', but explicit is clean)
    protected $table = 'marks';

    // Fillable columns — these can be mass assigned
    protected $fillable = [
        'student_id',
        'subject',
        'max_marks',
        'score',
        'exam_type',
        'semester',
    ];

    /**
     * Relationship: Each mark belongs to one student
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Optional helper: Calculate percentage for this subject
     */
    public function percentage()
    {
        if ($this->max_marks > 0) {
            return round(($this->score / $this->max_marks) * 100, 2);
        }
        return 0;
    }
}
