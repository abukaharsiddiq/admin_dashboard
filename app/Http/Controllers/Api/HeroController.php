<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::latest()->first();
        return response()->json([
            'status' => 'success',
            'data' => $hero
        ]);
    }
}
