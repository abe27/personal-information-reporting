<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticTest extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'at_date',
        'title',
        'description',
        'is_status',
    ];
}
