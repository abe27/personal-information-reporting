<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'action_id',
        'action_by_id',
        'on_date',
        'score',
        'is_status',
    ];
}
