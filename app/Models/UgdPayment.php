<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgdPayment extends Model
{
    use HasFactory, Uuids;

    protected $table = 'ugd_payment';


    protected $fillable = [
        'patient_id',
        'total',
        'umur',
        'start_treating',
        'end_treating',
        'days_treated',
        'registration_number',
        'status'
    ];

}
