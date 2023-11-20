<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintain extends Model
{
    use HasFactory, Uuids;
    protected $table = 'maintain';

    protected $fillable = [
        'name',
        'price',
        'unit'
    ];
}
