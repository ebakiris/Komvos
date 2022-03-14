<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourses extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'student_courses_table';
    public $timestamps = false;
}
