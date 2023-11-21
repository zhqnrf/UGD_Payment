<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    use HasFactory, Uuids;

    protected $table = 'ambulance';

    protected $fillable = [
        'qty',
        'price',
        'sub_total',
        'ugd_payment_id'
    ];
}
