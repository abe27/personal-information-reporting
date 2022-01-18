<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'province_id',
        'district',
        'is_status',
    ];
}
