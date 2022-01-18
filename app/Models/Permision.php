<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permision extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'user_id',
        'permision_group',
        'description',
        'is_status',
    ];
}
