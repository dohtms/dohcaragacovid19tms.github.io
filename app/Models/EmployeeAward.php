<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAward extends Model
{
    use HasFactory;
    protected $table="hris_employee_awards";
    protected $guarded = [];
    public $timestamps = false;
}
