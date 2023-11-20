<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory, Uuids;


    protected $table = 'patient';
    protected $fillable = [
        'name',
        'address',
        'date_of_birth'
    ];
}
