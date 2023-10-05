<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index() {
        return view('back.dashboard');
    }
}
