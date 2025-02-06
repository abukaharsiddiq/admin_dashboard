<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::latest()->get();
        return response()->json([
            'status' => 'success',
            'data' => $technologies
        ]);
    }
}
