<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierProductImages extends Model
{
    use HasFactory;

    protected $fillable =['supplier_id','purchase_id','purchase_no','product_images'];
}
