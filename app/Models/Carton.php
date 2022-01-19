<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carton extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'tarpg_id',
        'part_id',
        'rcno',
        'seq',
        'serialno',
        'lotno',
        'di_no',
        'div_no',
        'cost',
        'is_status',
    ];
}
