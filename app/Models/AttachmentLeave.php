<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentLeave extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'leave_id',
        'leave_attachment_url',
        'is_status',
    ];
}
