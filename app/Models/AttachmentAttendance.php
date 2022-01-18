<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentAttendance extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'work_confirm_id',
        'work_attachment_url',
        'is_status',
    ];
}
