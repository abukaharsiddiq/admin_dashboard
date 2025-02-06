<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::latest()->get();
        return response()->json([
            'status' => 'success',
            'data' => $clients
        ]);
    }
}
