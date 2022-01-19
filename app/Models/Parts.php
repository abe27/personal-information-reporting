<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
       'partno',
       'description',
       'part_kinds',
       'part_size',
       'part_color',
       'is_status',
    ];
}
