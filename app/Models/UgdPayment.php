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


    public function patient()
    {
        return $this->belongsTo(Patient::class, "patient_id");
    }

    public function ambulance()
    {
        return $this->hasOne(Ambulance::class);
    }

    public function care()
    {
        return $this->hasOne(Care::class);
    }
    public function iv()
    {
        return $this->hasOne(IvInsertion::class);
    }
    public function laboratorium()
    {
        return $this->hasOne(Laboratorium::class);
    }

    public function medicines()
    {
        return $this->hasOne(Medicines::class);
    }
    public function device()
    {
        return $this->hasOne(MedicinesDevice::class);
    }
    public function nutrition()
    {
        return $this->hasOne(Nutrition::class);
    }

    public function others()
    {
        return $this->hasMany(Others::class);
    }

    public function registration()
    {
        return $this->hasOne(Registration::class);
    }

    public function roomDetail()
    {
        return $this->hasOne(RoomDetail::class);
    }

    public function ugdAction()
    {
        return $this->hasOne(UgdAction::class);
    }

    public function doctor()
    {
        return $this->hasOne(VisiteDoctor::class);
    }



}
