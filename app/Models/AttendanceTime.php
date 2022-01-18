<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceTime extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'on_date',
        'in_time',
        'out_time',
        'status',
        'description',
        'is_status',
    ];
}
