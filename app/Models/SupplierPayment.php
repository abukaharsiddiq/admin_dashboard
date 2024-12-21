<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierPayment extends Model
{
    use HasFactory;

    protected $fillable =['purchase_id','supplier_id','supplier_phone','nid_no','payment_type','amount','date','month_year'];

}
