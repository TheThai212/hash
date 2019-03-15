<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HashTable extends Model
{
    protected $table = "students";
    protected $fillable = [
        'index', 'student_phone','student_birthday','student_credits','student_address','student_email','student_email','student_gender','mobile','student_name'
    ];
}
