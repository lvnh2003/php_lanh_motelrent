<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Method extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'motel_id',
    ];
}
