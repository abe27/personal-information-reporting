<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcidentTroubleshootingAttachment extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'accident_cause_id',
        'attachment_url',
        'is_status',
    ];
}
