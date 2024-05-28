<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentWithSubject extends Model
{
    use HasFactory;
    protected $table = 'studentwithsubjects';

    protected $fillable = ['student_id', 'subject_id','subject_Name', 'start_date', 'end_date'];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
