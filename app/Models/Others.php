<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Others extends Model
{
    use HasFactory, Uuids;
    protected $table = 'others';

    protected $fillable = [
        'qty',
        'name',
        'price',
        'sub_total',
        'ugd_payment_id',
        'unit'
    ];

    public function payment()
    {
        return $this->belongsTo(UgdPayment::class , "ugd_payment_id");
    }

}
