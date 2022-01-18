<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'subject',
        'url',
        'method',
        'visitor',
        'agent',
        'user_id',
    ];
}
