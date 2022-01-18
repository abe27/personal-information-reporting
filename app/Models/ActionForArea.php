<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionForArea extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'area_id',
        'activity_id',
        'on_date',
        'score',
        'description',
        'is_status',
    ];
}
