<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shiftment extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'title',
        'description',
        'start_at',
        'end_at',
        'fee_per',
        'is_status',
    ];
}
