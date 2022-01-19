<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forklift extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'section_id',
        'forklift_no',
        'forklift_img',
        'is_status',
    ];
}
