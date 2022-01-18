<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLeave extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'business_leave_limit',
        'business_leave_total',
        'vacation_leave_limit',
        'vacation_leave_total',
        'military_leave_limit',
        'military_leave_total',
        'maternity_leave_limit',
        'maternity_leave_total',
        'ordination_leave_limit',
        'ordination_leave_total',
        'sick_leave_limit',
        'sick_leave_total',
        'birth_day_leave_limit',
        'birth_day_leave_total',
        'married_leave_limit',
        'married_leave_total',
        'is_status',
    ];
}
