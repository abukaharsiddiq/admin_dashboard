<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\CashIn;
use App\Models\CashOut;
use App\Models\Sale;
use App\Models\Payment;
use App\Models\DirectorPayment;
use App\Models\CashInPayment;
use App\Models\PurchasePayment;
use App\Models\Product;
use App\Models\PurchaseDetails;
use App\Models\SaleDetails;
use App\Models\CustomerPayment;
use App\Models\SupplierPayment;
use App\Models\Advance;
use DB;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        return view('back-end.home.home');
    }
}
