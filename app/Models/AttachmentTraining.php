<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentTraining extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'training_id',
        'attachment_training_url',
        'is_status',
    ];
}
