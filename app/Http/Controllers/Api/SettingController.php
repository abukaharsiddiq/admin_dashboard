<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::latest()->first();
        return response()->json([
            'status' => 'success',
            'data' => $setting
        ]);
    }
}
