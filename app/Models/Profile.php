<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'user_id',
        'empcode',
        'first_name',
        'last_name',
        'nick_name',
        'sexual',
        'status',
        'marry_date',
        'birth_date',
        'avatar_url',
        'signal_url',
        'is_status',
    ];
}
