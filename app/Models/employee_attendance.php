<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_attendance extends Model
{
    use HasFactory;
    protected $casts = [
        'employee_name' => 'array',
        'employee_email' => 'array',
        'employee_attendence' => 'array',
    ] ;
}
