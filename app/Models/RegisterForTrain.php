<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterForTrain extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'train_id',
        'profile_id',
        'score',
        'status',
        'is_status',
        'description',
    ];
}
