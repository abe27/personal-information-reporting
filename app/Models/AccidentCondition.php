<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentCondition extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'title',
        'description',
        'is_status',
    ];
}
