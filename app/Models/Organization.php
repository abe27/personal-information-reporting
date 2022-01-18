<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'section_id',
        'position_id',
        'whs_id',
        'description',
        'is_status',
    ];
}
