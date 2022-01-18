<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitesList extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'category_id',
        'title',
        'description',
        'full_score',
        'is_status',
    ];
}
