<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteDoctor extends Model
{
    use HasFactory, Uuids;

    protected $table = 'visite_doctor';
    protected $fillable = [
        'qty',
        'sub_total',
        'price' ,
        'ugd_payment_id'
    ];
}
