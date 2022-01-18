<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'on_date',
        'from_time',
        'to_time',
        'leave_type_id',
        'reason',
        'description',
        'status',
        'is_status',
    ];
}
