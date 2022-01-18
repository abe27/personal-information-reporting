<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TakeExam extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'training_id',
        'exam_detail_id',
        'is_status',
    ];
}
