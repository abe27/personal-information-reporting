<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEtc extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'profile_id',
        'car_drived',
        'car_drived_license',
        'motocycle_drived',
        'motocycle_drived_license',
        'forklift_drived',
        'forklift_drived_license',
        'forklift_type',
        'description',
        'is_status',
    ];
}
