<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory, Uuids;

    public $fillable = [
        'contact',
        'company',
        'addres_1',
        'addres_2',
        'country_id',
        'email',
        'tel_no',
    ];
}
