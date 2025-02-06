<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stat;

class StatController extends Controller
{
    public function index()
    {
        $stats = Stat::latest()->get();
        return response()->json([
            'status' => 'success',
            'data' => $stats
        ]);
    }
}
