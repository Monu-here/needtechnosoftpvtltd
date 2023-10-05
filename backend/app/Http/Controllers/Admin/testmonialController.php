<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testmonialController extends Controller
{
    public function index()
    {
        $testmonials = DB::table('testmonials')->get();
        return view('back.testonominal.index', compact('testmonials'));
    }
}
