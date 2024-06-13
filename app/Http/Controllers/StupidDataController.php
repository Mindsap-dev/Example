<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StupidData;

class StupidDataController extends Controller
{
    public function index()
    {
        $data = StupidData::all();
        return response()->json($data);
    }
}
