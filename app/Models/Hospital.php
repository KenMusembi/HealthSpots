<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function paymentmethods(){
        return $this->hasMany('App\PaymentMethods');
    }

    public function services(){
        return $this->hasMany('App\Services');
    }

    public function insurance_companies(){
        return $this->hasMany('App\InsuranceCompanies');
    }
}
