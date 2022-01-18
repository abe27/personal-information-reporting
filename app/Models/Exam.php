<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'practic_id',
        'subject',
        'score',
        'is_status',
    ];
}
