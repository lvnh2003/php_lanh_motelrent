<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameOfPerson',
        'phoneNumber',
        'rentDate',
        'remark'
    ];
    
    public function paymentMethods()
    {
        return $this->hasMany(Payment_Method::class);
    }
}
