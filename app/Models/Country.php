<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = 'country';
    public $fillable = [
        'id',
        'name',
    ];
}