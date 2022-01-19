<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'webboard_id',
        'description',
        'profile_id',
        'is_status',
    ];
}
