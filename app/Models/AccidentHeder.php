<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentHeder extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'accident_id',
        'ind_no',
        'di_no',
        'hr_no',
        'accident_date',
        'accident_time',
        'offender_id',
        'description',
        'status',
        'is_status',
    ];
}
