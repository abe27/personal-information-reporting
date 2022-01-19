<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentConditionAttachment extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'accident_detail_id',
        'accident_detail_urls',
        'is_status',
    ];
}
