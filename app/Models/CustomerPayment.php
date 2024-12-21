<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;
    
    protected $fillable =['order_id','customer_id','customer_phone','customer_nid_no','payment_type','amount','date','month_year'];
}
