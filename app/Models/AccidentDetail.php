<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentDetail extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'accident_id',
        'accident_place',
        'accident_detail',
        'condition_id',
        'condition_detail',
        'forklift_id',
        'is_status',
    ];
}
