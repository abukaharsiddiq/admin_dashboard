<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        return response()->json([
            'status' => 'success',
            'data' => $about
        ]);
    }
}
