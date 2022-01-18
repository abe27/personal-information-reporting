<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'district_id',
        'zipcode',
        'place',
        'is_status',
    ];
}
