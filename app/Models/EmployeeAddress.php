<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'address_1',
        'address_2',
        'country_id',
        'status',
        'tel_no',
        'mobile_no',
        'is_status',
    ];
}
