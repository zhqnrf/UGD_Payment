<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chairmain extends Model
{
    use HasFactory , Uuids;


    protected $table = 'chairmain';

    protected $fillable = [
        'name',
        'rank',
        'nip'
    ];

}
