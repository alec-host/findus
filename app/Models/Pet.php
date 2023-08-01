<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'owner_id',
        'name',
        'photo',
        'microchip_no',
        'coat_color',
        'age',
        'species',
        'breed',
        'clinic_registered',
        'gender'
    ];
}
