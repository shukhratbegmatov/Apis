<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public $table = 'device';
    public $fillable = [
        'id',
        'name',
    ];
}