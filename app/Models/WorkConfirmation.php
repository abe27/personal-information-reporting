<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkConfirmation extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'reason_id',
        'at_date',
        'at_time',
        'description',
        'remark',
        'is_status',
    ];
}
