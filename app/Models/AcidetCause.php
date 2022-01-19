<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcidetCause extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'accident_id',
        'analyze_cause',
        'prevent',
        'is_status',
    ];
}
