<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model
{
    use HasFactory, Uuids;

    protected $table = 'room_detail';

    protected $fillable = [
        'room_id',
        'qty',
        'ugd_payment_id',
        'sub_total',
    ];

    public function payment()
    {
        return $this->belongsTo(UgdPayment::class , "ugd_payment_id");
    }

    public function room()
    {
        return $this->belongsTo(Room::class , "room_id");
    }
}
