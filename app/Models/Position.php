<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'seq',
        'title',
        'description',
        'is_status',
    ];
}
