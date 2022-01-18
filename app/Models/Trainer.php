<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'user_id',
        'company_id',
        'fullname',
        'description',
        'is_status',
    ];
}
