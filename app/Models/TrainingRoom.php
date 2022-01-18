<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingRoom extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'room_no',
        'description',
        'is_idle',
        'is_status',
    ];
}
