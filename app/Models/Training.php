<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'subject',
        'on_date',
        'from_time',
        'to_time',
        'room_id',
        'trainer_id',
        'description',
        'status',
        'is_status',
    ];
}
