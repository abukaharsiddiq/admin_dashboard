<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function index(){
        $social = Social::latest()->first();
        return response()->json([
            'status' => 'success',
            'data' => $social
        ]);
    }
}
