<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webboard extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'category_id',
        'post_at',
        'topic',
        'description',
        'profile_id',
        'importance',
        'is_publish',
        'is_status',
    ];
}
