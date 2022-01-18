<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'exam_id',
        'title',
        'is_correct',
        'is_status',
    ];
}
