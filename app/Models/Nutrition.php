<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    use HasFactory, Uuids;

    protected $table = 'nutrition_consultation';

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
