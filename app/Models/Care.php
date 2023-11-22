<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{
    use HasFactory, Uuids;


    protected $table = 'nursing_care';

    protected $fillable = [
        'qty',
        'price',
        'sub_total',
        'ugd_payment_id'
    ];
    public function payment()
    {
        return $this->belongsTo(UgdPayment::class , "ugd_payment_id");
    }
}
