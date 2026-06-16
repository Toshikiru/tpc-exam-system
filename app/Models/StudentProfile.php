<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id', 'student_id', 'full_name', 'sex', 'date_of_birth',
        'address', 'contact_number', 'guardian_name', 'guardian_contact_number',
        'course', 'year_level', 'admission_status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}