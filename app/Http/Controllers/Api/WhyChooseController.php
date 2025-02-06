<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChoose;

class WhyChooseController extends Controller
{
    public function index()
    {
        $whychooses = WhyChoose::latest()->get();
        return response()->json([
            'status' => 'success',
            'data' => $whychooses
        ]);
    }
}
