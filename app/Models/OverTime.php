<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverTime extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'section_id',
        'on_date',
        'start_time',
        'end_time',
        'description',
        'remark',
        'status',
        'is_holiday',
        'is_status',
    ];
}
